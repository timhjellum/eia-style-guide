<?php
require_once('global/includes/utils/Database.inc');

class Data extends Database {
    var $connection_name = 'enerdatweb';

    var $sql = <<< SQL
SQL;
    var $dataTopics = array();

    var $not_allowed_topics = array('39','40','41','42');

    var $plantDataTopic = 1;

	protected function fetchAll(
		&$output,
		$flag = OCI_FETCHSTATEMENT_BY_ROW,
		$keyInLowerCase = true,
		$removeNulls = false
	) {
		return parent::fetchAll($output, $flag, $keyInLowerCase, $removeNulls);
	}

    public  function getDataTopics($id=null, $enabled=1, $data_set='ELEC') {
        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;

        $this->sql = "select a.* from ENERDAT.ED_META_DATA_TOPIC a ";
        $orderby = " a.display_order, a.id ";

        if (!is_null($id)) {
            $where[]                      = "a.id = :id";
            $bindVariables[':id'] = $id;
        }
        if (!is_null($enabled)) {
            $where[]                      = "a.enabled = :enabled";
            $bindVariables[':enabled'] = $enabled;
        }
        if (!is_null($data_set)) {
            $where[]                      = "a.data_set = :data_set";
            $bindVariables[':data_set'] = $data_set;
        }


        //Add where conditions to sql string
        if (count($where) !== 0) {
            $this->sql .= ' WHERE ' . implode(' AND ', $where);
        }

        if($orderby)
            $this->sql .= ' ORDER BY ' . $orderby;

        try {
            $res = array();
            $res = parent::get($bindVariables);

            $this->sql = $sql_ori;

            $returnArr = [];
            foreach($res as $row) {
                //print_r($row);
                $topic = $row['id'];

                $dataTopic = array();   //set this variable associated with specific id
                $dataTopic['dataTopicId'] = $row['id'];
                $dataTopic['description'] = $row['description'];
                $dataTopic['hasAnnual'] = $row['has_annual'];
                $dataTopic['hasQuarterly'] = $row['has_quarterly'];
                $dataTopic['hasMonthly'] = $row['has_monthly'];
                $dataTopic['annualStart'] = $row['annual_start'] ? $row['annual_start'] : '';
                $dataTopic['quarterlyStart'] = $row['quarterly_start'] ? $row['quarterly_start'] : '';
                $dataTopic['monthlyStart'] = $row['monthly_start'] ? $row['monthly_start'] : '';
                $dataTopic['annualEnd'] = $row['annual_end'] ? $row['annual_end'] : '';
                $dataTopic['quarterlyEnd'] = $row['quarterly_end'] ? $row['quarterly_end'] : '';
                $dataTopic['monthlyEnd'] = $row['monthly_end'] ? $row['monthly_end'] : '';
                $dataTopic['selectDateRange'] = $row['select_date_range'];
                $dataTopic['units'] = $row['units'];
                $dataTopic['drillDownTopicId'] = $row['drill_down_topic_id'] ? $row['drill_down_topic_id'] : '';
                $dataTopic['displayOrder'] = $row['display_order'];
                $dataTopic['precision'] = $row['precision'];
                $dataTopic['seriesTable'] = $row['series_table'];
                $dataTopic['defaultAgg'] = $row['default_agg'];
                $dataTopic['dataType'] = $row['data_type'];
                $dataTopic['aggColumns'] = array();
                $dataTopic['enabled'] = $row['enabled'];
                //$dataTopic['notes'] = $row['notes'];
                $dataTopic['defaultSelection'] = $row['default_selection'];
                $dataTopic['data_set'] = $row['data_set'];

                $aggColumns = array();
                $valid_agg = '';
                $aggColumns_res = array();

                $aggColumns_res = $this->getaggColumns($topic);

                foreach($aggColumns_res as $k=>$v) {
                    $aggColumns[$k]['aggColumnId'] = $v['id'];
                    $aggColumns[$k]['topicId'] = $v['topic_id'];
                    $aggColumns[$k]['description'] = $v['description'];
                    $aggColumns[$k]['seriesIdOrder'] = $v['series_id_order'];
                    $aggColumns[$k]['filterGroup'] = array();   //(object) array();
                    $aggColumns[$k]['tableColumn'] = $v['table_column'];
                    $aggColumns[$k]['tableColumnType'] = $v['table_column_type'];
                    $aggColumns[$k]['isGeoset'] = $v['is_geoset'];
                    $aggColumns[$k]['filterGroupId'] = $v['filter_group_id'];

                    if($valid_agg != '')
                        $valid_agg .= "," . $aggColumns[$k]['aggColumnId'];
                    else
                        $valid_agg = $aggColumns[$k]['aggColumnId'];

                    $filterGrp_res = array();
                    if($v['filter_group_id']) {
                        $filterGrp_res = $this->getfilterGrp($v['filter_group_id']);
                        foreach($filterGrp_res as $k1=>$v1) {
                            $aggColumns[$k]['filterGroup']['filterGroupId'] = $v1['filter_group_id'];
                            $aggColumns[$k]['filterGroup']['description'] = $v1['description'];
                            $aggColumns[$k]['filterGroup']['defaultValue'] = $v1['default_value'];
                            $aggColumns[$k]['filterGroup']['filterValues'] = array();
                            $aggColumns[$k]['filterGroup']['varName'] = $v1['var_name'];

                            $filterGrpValues_res = array();
                            $filterGrpValues_res = $this->getfilterGrpValue($v1['filter_group_id']);
                            foreach($filterGrpValues_res as $k2=>$v2) {
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['id'] = $v2['id'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['filterGroupId'] = $v2['filter_group_id'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['valueId'] = $v2['value_id'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['filterValue'] = $v2['filter_value'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['description'] = $v2['description'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['dataDescription'] = $v2['data_description'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['displayOrder'] = $v2['display_order'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['level'] = $v2['level'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['parentValueId'] = $v2['parent_value_id'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['hasChildren'] = $v2['has_children'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['isTotal'] = $v2['is_total'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['units'] = $v2['units'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['notes'] = $v2['notes'];
                                $aggColumns[$k]['filterGroup']['filterValues'][$k2]['noDataBreakdown'] = $v2['no_data_breakdown'];
                            }

                        }
                    }
                }
                $dataTopic['aggColumns'] = $aggColumns;
                $dataTopic['valid_agg'] = $valid_agg;

                $returnArr[$topic] = $dataTopic;
            }

            return $returnArr;
        } catch (Exception $e) {
            throw $e;
        }

    }

    public  function getaggColumns($topic_id=null, $id=null) {

        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;

        $this->sql = "select a.* from ENERDAT.ED_META_AGG_COLUMNS a ";
        $orderby = " a.series_id_order, a.topic_id, a.id ";

        if (!is_null($topic_id)) {
            $where[]                      = "a.topic_id = :topic_id";
            $bindVariables[':topic_id'] = $topic_id;
        }
        if (!is_null($id)) {
            $where[]                      = "a.id = :id";
            $bindVariables[':id'] = $id;
        }

        //topic_id can be 0 >> which we can track as follows
        if(($topic_id == 0) && !isset($bindVariables[':topic_id'])) {
            $where[]                      = "a.topic_id = :topic_id";
            $bindVariables[':topic_id'] = $topic_id;
        }

        //Add where conditions to sql string
        if (count($where) !== 0) {
            $this->sql .= ' WHERE ' . implode(' AND ', $where);
        }

        $this->sql .= ' ORDER BY ' . $orderby;

        //print $this->sql;
        //print_r($bindVariables);

        try {

            $res = array();
            $res = parent::get($bindVariables);

            $this->sql = $sql_ori;

            $returnArr = $res;

            return array_values($returnArr);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public  function getfilterGrp($filter_group_id) {

        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;

        $this->sql = "select a.* from ENERDAT.ED_META_FILTER_GROUP a ";
        $orderby = " a.filter_group_id ";

        if (!is_null($filter_group_id)) {
            $where[]                      = "a.filter_group_id = :filter_group_id";
            $bindVariables[':filter_group_id'] = $filter_group_id;
        }

        //Add where conditions to sql string
        if (count($where) !== 0) {
            $this->sql .= ' WHERE ' . implode(' AND ', $where);
        }

        $this->sql .= ' ORDER BY ' . $orderby;
        //print $this->sql;

        try {
            $res = array();
            $res = parent::get($bindVariables);
            $this->sql = $sql_ori;
            $returnArr = $res;

            return array_values($returnArr);
        } catch (Exception $e) {
            throw $e;
        }

    }

    public  function getfilterGrpValue($filter_group_id) {

        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;

        $this->sql = "select a.* from ENERDAT.ED_META_FILTER_VALUES a ";
        $orderby = " a.display_order ";

        if (!is_null($filter_group_id)) {
            $where[]                      = "a.filter_group_id = :filter_group_id";
            $bindVariables[':filter_group_id'] = $filter_group_id;
        }

        //Add where conditions to sql string
        if (count($where) !== 0) {
            $this->sql .= ' WHERE ' . implode(' AND ', $where);
        }

        $this->sql .= ' ORDER BY ' . $orderby;

        try {
            $res = array();
            $res = parent::get($bindVariables);
            $this->sql = $sql_ori;
            $returnArr = $res;

            return array_values($returnArr);
        } catch (Exception $e) {
            throw $e;
        }
    }

    private  function validateAgg($aggColumns, $agg) {

        $possibleAggs = "";
        $aggArr = explode(",", $agg);

        for($i=0; $i < count($aggColumns); $i++) {
            $tmp_aggColumnId = $aggColumns[$i]['aggColumnId'];
            if($possibleAggs != '')
                $possibleAggs .= "," . $tmp_aggColumnId;
            else
                $possibleAggs .= $tmp_aggColumnId;

            $aggArr = explode(",", $agg);
            if($tmp_aggColumnId != '' && !in_array($tmp_aggColumnId, $aggArr)) {
                $agg = $tmp_aggColumnId . "," . $agg;
            }
        }

        $aggArr = explode(",", $agg);
        $possibleAggsArr = explode(",", $possibleAggs);
        for($i=count($aggArr)-1; $i >= 0; $i--) {
            $val = $aggArr[$i];
            if(!in_array($val, $possibleAggsArr)) {
                unset($aggArr[$i]);
                $aggArr = array_values($aggArr);
            }
        }
        $agg = implode(",", $aggArr);

        return $agg;
    }

    private  function validateFreq($hasAnnual,$hasMonthly, $hasQuarterly, $freq) {

        $freq = strtoupper($freq);
        switch($freq) {
            case "A" :
                if($hasAnnual)
                    return $freq;
                break;
            case "M" :
                if($hasMonthly)
                    return $freq;
                break;
            case "Q" :
                if($hasQuarterly)
                    return $freq;
                break;
        }
        return "A";
    }

    private function buildFilterIndices($base32Str)
    {
        $binaryNum = array_map('intval', str_split($this->base32toBin($base32Str)));
        $return = [];

        foreach ($binaryNum as $k => $v) {
            if ($v === 1) {
                $return[] = $k;
            }
        }

        return $return;
    }

    private  function buildFilterGroupIdOrderArray($aggColumns) {

        $retArray = array();
        $ret = "";

        for($i = 0; $i < count($aggColumns); $i++) {
            $struct = array();
            $insertIndex = 1;
            $filterValues = $aggColumns[$i]["filterGroup"]["filterValues"];
            $totalValue = '';

            for($k = 0; $k < count($filterValues); $k++) {
                if($filterValues[$k]["isTotal"] == 1) {
                    $totalValue = $filterValues[$k]["filterValue"];
                }
            }

            $struct["ORDER"] = $aggColumns[$i]["seriesIdOrder"];
            $struct["FILTERGROUPID"] = $aggColumns[$i]["filterGroup"]["filterGroupId"];
            $struct["DEFAULTVALUE"] = $totalValue;

            for($j = 0; $j < count($retArray); $j++) {
                if($retArray[$j]["ORDER"] < $struct["ORDER"]) {
                    $insertIndex = $j+1;
                }
            }

            if($insertIndex > count($retArray)) {
                $retArray[] = $struct;
            } else {
                $retArray[$insertIndex] = $struct;
            }
        }

        return $retArray;
    }

    public  function get_hierarchyQuery($aggColumnItems, $last2Aggs_array, $filterValues, $filterValuesNoData) {

        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;

        $tmp_v1 = $aggColumnItems[$last2Aggs_array[count($last2Aggs_array)-1]]['FILTER_GROUP_ID'];

        $tmp_v2 = '';
        if(!empty($filterValues)) {
            //$tmp_v2 = " DECODE(a.FILTER_VALUE, ";
            foreach($filterValues as $k1=>$v1) {
                $tmp_v2 .= "'" . $v1 . "', 1,";
            }
            if($tmp_v2)
                $tmp_v2 = " DECODE(a.FILTER_VALUE, " . $tmp_v2 . "0) ";
        }

        $tmp_v7 = '';
        if($tmp_v1) {
            $tmp_v7 = "decode(a.filter_group_id, " . $tmp_v1;
            if($tmp_v2) {
                $tmp_v7 .= ", " . $tmp_v2 . ", 0)";
            } else {
                $tmp_v7 .= ", 0)";
            }
        }
        //$bindVariables[':tmpKey_v7'] = $tmp_v7;

        $tt = explode(",", $filterValuesNoData);
        $tmp_v3 = '';
        $j = 0;
        foreach($tt as $v1) {
            if($tmp_v3 != '')
                $tmp_v3 .= ", :tmpKey_v3" . $j;
            else
                $tmp_v3 .= " :tmpKey_v3" . $j;

            $bindVariables[":tmpKey_v3" . $j] = $v1;
            $j++;
        }


        $tmp_v4 = $aggColumnItems[$last2Aggs_array[0]]['FILTER_GROUP_ID'];
        $bindVariables[':tmpKey_v4'] = $tmp_v4;

        $tmp_v5 = "";
        for($i=1; $i<count($last2Aggs_array); $i++) {
            $tmp_v5 .= " OR (prior ";

            $tmp_v5 .= " a.FILTER_GROUP_ID = :tmpKey_v51 ";
            $bindVariables[':tmpKey_v51'] = $aggColumnItems[$last2Aggs_array[$i-1]]['FILTER_GROUP_ID'];

            $tmp_v5 .= " and a.FILTER_GROUP_ID = :tmpKey_v52 ";
            $bindVariables[':tmpKey_v52'] = $aggColumnItems[$last2Aggs_array[$i]]['FILTER_GROUP_ID'];

            $tmp_v5 .= " and a.PARENT_ID is null ";
            $tmpstr = '';
            $tmparr = explode(",", $aggColumnItems[$last2Aggs_array[$i-1]]['FILTER_STRING']);
            $j = 0;
            foreach($tmparr as $v3) {
                if($tmpstr != '')
                    $tmpstr .= ", :tmpKey_v52" . $j;
                else
                    $tmpstr .= " :tmpKey_v52" . $j;

                $bindVariables[':tmpKey_v52'.$j] = $v3;
                $j++;
            }
            $tmp_v5 .= " and prior a.FILTER_VALUE in ( " . $tmpstr . " ) ";
            $tmp_v5 .= " )";
        }


        //data validation
        if(!$tmp_v1 || !$filterValuesNoData || !$tmp_v5)
            return array();

        $this->sql = "
			select
				a.FILTER_GROUP_ID,
				a.DESCRIPTION,
				a.DATA_DESCRIPTION,
				trim(Replace(sys_connect_by_path(decode(a.NO_DATA_BREAKDOWN, 1, '1', ''), '|'), '|', '')) as NO_DATA_BREAKDOWN,
				level - 1 AS HIER_LEVEL,
				a.UNITS,
				Trim('|' from sys_connect_by_path(a.UNITS, '|')) as UNITS_PATH,
				Trim('|' from sys_connect_by_path(a.PRECISION, '|')) as PRECISION_PATH,
				Replace(Trim('|' from sys_connect_by_path('\"' || a.FILTER_GROUP_ID || '\":\"' || a.DESCRIPTION || '\"', '|')), '\"|\"', '\",\"') as PATH,
				Trim(',' from sys_connect_by_path('\"' || a.FILTER_GROUP_ID || '\":\"' || a.FILTER_VALUE || '\"', ',')) as VALUE_PATH,
				" . $tmp_v7 . " as HAS_DATA,
				'' as SERIES_ID
			from ENERDAT.ED_META_FILTER_VALUES a
			where
				a.FILTER_VALUE in (" . $tmp_v3 . ")
			start with
				a.PARENT_ID is null
                and a.FILTER_GROUP_ID = :tmpKey_v4
            connect by nocycle
				prior a.ID = a.PARENT_ID " . $tmp_v5 . "
            order siblings by
				a.parent_id nulls first, a.DISPLAY_ORDER
        ";

        //print "get_hierarchy: " . $this->sql;
        //print_r($bindVariables);

        try {
            $res = array();
            $res = parent::get($bindVariables);
            $this->sql = $sql_ori;
            $returnArr = $res;

            return $returnArr;

        } catch (Exception $e) {
            throw $e;
        }
    }

    public  function get_dataQuery($seriesTable, $freq, $dataType, $aggColumnItems) {

        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;
        $orderby = '';

        //data validation
        if(!$seriesTable) {
            return array();
        }

        $tmp_v1 = '';
        $aggColumnItems_keys = array_keys($aggColumnItems);
        $j = 0;
        foreach($aggColumnItems_keys as $v0) {
            $tmpArr = explode(",", $aggColumnItems[$v0]["FILTER_STRING"]);
            $tmpStr = '';
            foreach($tmpArr as $v1) {
                if($tmpStr != '')
                    $tmpStr .= ", :tmpKey_v1" . $j;
                else
                    $tmpStr .= " :tmpKey_v1" . $j;

                $bindVariables[":tmpKey_v1" . $j] = $v1;
                $j++;
            }
            if ($tmpStr)
                $tmp_v1 .= " AND " . $aggColumnItems[$v0]["TABLE_COLUMN"] . " in (" . $tmpStr . ")";
        }

        $query_string = "SELECT a.SERIES_ID, a.NAME,	a.UNITS, a.PRECISION, a.GEOSET_ID,
        	a.GEOSET_NAME, c.JSON_DATA, c.json_rse FROM ENERDAT." . $seriesTable . " a
        	LEFT JOIN ENERDAT.DATA_CLOB PARTITION(\"ELEC\") c
			ON a.SERIES_ID = c.SERIES_ID ";

        if (!is_null($freq)) {
            $where[]                      = "a.FREQUENCY = :freq";
            $bindVariables[':freq'] = $freq;
        }

        if($seriesTable && $dataType) {
            $where[] = " a.SERIES_ID in (
                            SELECT SERIES_ID FROM ENERDAT." . $seriesTable . "
                            WHERE DATA_TYPE = :tmpKey_v3 " . $tmp_v1 .
                       " ) ";
            $bindVariables[':tmpKey_v3'] = $dataType;
        }

        //Add where conditions to sql string
        if (count($where) !== 0) {
            $query_string .= ' WHERE ' . implode(' AND ', $where);
        }

        if($orderby)
            $query_string .= ' ORDER BY ' . $orderby;

        $returnArr = array();
        if(stristr($query_string, 'json_data')) {
            $returnArr = $this->getJSON_result($query_string, $bindVariables, $sql_ori, 2);
        }

        return $returnArr;

    }

    private  function createDefaultRowObject($dataColumns) {

        $ret = array();

        for($i = 0; $i < count($dataColumns); $i++)
        {
            $ret[$dataColumns[$i]] = "--";
        }

        return $ret;
    }

    private  function getDataColumns($freq, $start, $end) {

        $ret = array();
        switch($freq) {
            case 'M':
                for($yyyy = $start; $yyyy <= $end;  $yyyy = ((($yyyy % 100) == 12) ? $yyyy + 89 : $yyyy + 1))
                {
                    $ret[] = (int) $yyyy;
                }
                break;
            case 'Q':
                for($yyyy = $start; $yyyy <= $end; $yyyy = ((($yyyy % 100) == 4) ? $yyyy + 97 : $yyyy + 1))
                {
                    $ret[] = (int) $yyyy;
                }
                break;
            case 'A':
            default:
                for($yyyy = $start; $yyyy <= $end; $yyyy++)
                {
                    $ret[] = (int) $yyyy;
                }
                break;
        }

        return $ret;
    }

    private  function buildSeriesId($values, $aggColumnStructs) {

        $ret = "";

        for($i = 0; $i < count($aggColumnStructs); $i++) {

            if(in_array($aggColumnStructs[$i]["FILTERGROUPID"], array_keys($values))) {
                //if(ArrayContains(StructKeyArray(values), aggColumnStructs[i]["FILTERGROUPID"])) {
                if($ret)
                    $ret .= "-" . $values[$aggColumnStructs[$i]["FILTERGROUPID"]];
                else
                    $ret = $values[$aggColumnStructs[$i]["FILTERGROUPID"]];
            } else {
                if(!$aggColumnStructs[$i]["DEFAULTVALUE"]) {
                    return '';
                }

                if($ret)
                    $ret .= "-" . $aggColumnStructs[$i]["DEFAULTVALUE"];
                else
                    $ret = $aggColumnStructs[$i]["DEFAULTVALUE"];
            }
        }
        return $ret;
    }

    public function getJSON_result($query_string, $bindVariables, $sql_ori, $tot_jsondata_fields=1) {

        if($tot_jsondata_fields == 1) {
            $query_string = trim($query_string);
            $pos_from = stripos($query_string, ' from ');
            $pos_select = stripos($query_string, 'select ');
            $select_fields = str_ireplace('c.json_data', '1 as filler_field', trim(substr($query_string, $pos_select+6, $pos_from-5)));
            $from_clause = trim(substr($query_string, $pos_from));

            //run one query using the passed $query_string variable. It will replace "Select ... from" with "select max(json_data_length) from" to get the maximum length of the clob field.
            //$this->sql = "select max(length(c.json_data)) from  ENERDAT.DATA_CLOB PARTITION(\"COAL\") c ";
            $this->sql = "select max(length(c.json_data)) as max_json_data_length " . $from_clause;
            //print "<br/>" . $this->sql;

            try {
                $res = array();
                $res = parent::get($bindVariables);

                $max_json_data_length = 0;
                if(isset($res[0]['max_json_data_length']))
                    $max_json_data_length = $res[0]['max_json_data_length'];

                //print "\n\n max_json_data_length:$max_json_data_length";

                //Calculate number of 4000 character chunks by taking the ceiling of the maximum length dividied by 4000
                $dataColumnCount = 0;
                if($max_json_data_length)
                    $dataColumnCount = Ceil($max_json_data_length/4000);

                //Run a second query, but replace json_data in the select clause with  "n" number of columns where n is the number of 4000 character chunks calculated in the previous step
                $json_data_fields = '';
                for($i = 0; $i < $dataColumnCount; $i++) {
                    $json_data_fields .= ', cast(substr(c.json_data,' . (($i * 4000)+1) . ',4000) as varchar2(4000)) as json_data_' . $i;
                }
                //print "<br/><br/>json_data_fields: " . $json_data_fields;

            } catch (Exception $e) {
                throw $e;
            }

            $sql_ori = $this->sql;

            $this->sql = 'SELECT ' . $select_fields . ' ' . $json_data_fields . ' ' . $from_clause;
            //print "<br/>" . $this->sql;
            //print_r($bindVariables);

            try {
                $res = array();
                $res = parent::get($bindVariables);
                $res_total = count($res);
                //print_r($res);

                if($res_total==0 || $res_total==false) {
                    return array();
                }

                $returnArr = array();
                $i = 0;
                foreach($res as $k1=>$v1) {
                    $jsonStr = '';
                    $returnArr[$k1]['json_data'] = '';
                    foreach($v1 as $k2=>$v2) {
                        if (stripos($k2, 'json_data_') !== false) {
                            $jsonStr .= $v1[$k2];
                            unset($res[$k1][$k2]);
                            $res[$k1] = array_values($res[$k1]);
                        } else {
                            $returnArr[$k1][$k2] = $v1[$k2];
                        }
                    }
                    $returnArr[$k1]['json_data'] = $jsonStr;
                }


                return $returnArr;
            } catch (Exception $e) {
                throw $e;
            }
        } elseif($tot_jsondata_fields == 2) {
            $query_string = trim($query_string);
            $pos_from = stripos($query_string, ' from ');
            $pos_select = stripos($query_string, 'select ');
            $select_fields = str_ireplace('c.json_data', '1 as filler_field', trim(substr($query_string, $pos_select+6, $pos_from-5)));
            $select_fields = str_ireplace('c.json_rse', '1 as filler2_field', $select_fields);
            $from_clause = trim(substr($query_string, $pos_from));

            //run one query using the passed $query_string variable. It will replace "Select ... from" with "select max(json_data_length) from" to get the maximum length of the clob field.
            //$this->sql = "select max(length(c.json_data)) from  ENERDAT.DATA_CLOB PARTITION(\"COAL\") c ";
            $this->sql = "select max(length(c.json_data)) as max_json_data_length, max(length(c.json_rse)) as max_json_rse_length " . $from_clause;

            try {

                $res = array();
                $res = parent::get($bindVariables);

                $max_json_data_length = 0;
                if(isset($res[0]['max_json_data_length']))
                    $max_json_data_length = $res[0]['max_json_data_length'];
                //print "max_json_data_length:$max_json_data_length";

                $max_json_rse_length = 0;
                if(isset($res[0]['max_json_rse_length']))
                    $max_json_rse_length = $res[0]['max_json_rse_length'];
                //print "max_json_rse_length:$max_json_rse_length";

                //Calculate number of 4000 character chunks by taking the ceiling of the maximum length dividied by 4000
                $dataColumnCount = 0;
                if($max_json_data_length)
                    $dataColumnCount = Ceil($max_json_data_length/4000);

                $rse_dataColumnCount = 0;
                if($max_json_rse_length)
                    $rse_dataColumnCount = Ceil($max_json_rse_length/4000);

                //Run a second query, but replace json_data in the select clause with  "n" number of columns where n is the number of 4000 character chunks calculated in the previous step
                $json_data_fields = '';
                for($i = 0; $i < $dataColumnCount; $i++) {
                    $json_data_fields .= ', cast(substr(c.json_data,' . (($i * 4000)+1) . ',4000) as varchar2(4000)) as json_data_' . $i;
                }
                //print "<br/><br/>json_data_fields: " . $json_data_fields;

                $json_rse_fields = '';
                for($i = 0; $i < $rse_dataColumnCount; $i++) {
                    $json_rse_fields .= ', cast(substr(c.json_rse,' . (($i * 4000)+1) . ',4000) as varchar2(4000)) as json_rse_' . $i;
                }

            } catch (Exception $e) {
                throw $e;
            }

            $sql_ori = $this->sql;

            $this->sql = 'SELECT ' . $select_fields . ' ' . $json_data_fields . ' ' . $json_rse_fields . ' '. $from_clause;

            try {

                $res = array();
                $res = parent::get($bindVariables);
                $res_total = count($res);
                //print_r($res);

                if($res_total==0 || $res_total==false) {
                    return array();
                }

                $returnArr = array();
                $i = 0;
                foreach($res as $k1=>$v1) {
                    $jsonStr = '';
                    $returnArr[$k1]['json_data'] = '';

                    $jsonRseStr = '';
                    $returnArr[$k1]['json_rse'] = '';
                    foreach($v1 as $k2=>$v2) {
                        if (stripos($k2, 'json_data_') !== false) {
                            $jsonStr .= $v1[$k2];
                            unset($res[$k1][$k2]);
                        } elseif (stripos($k2, 'json_rse_') !== false) {
                            $jsonRseStr .= $v1[$k2];
                            unset($res[$k1][$k2]);
                        } else {
                            $returnArr[$k1][$k2] = $v1[$k2];
                        }
                    }
                    $returnArr[$k1]['json_data'] = $jsonStr;
                    $returnArr[$k1]['json_rse'] = $jsonRseStr;
                }

                return $returnArr;

            } catch (Exception $e) {
                throw $e;
            }

        }
    }

    function base32toBin($base32str)
    {
        $return = '';
        foreach (str_split($base32str) as $v) {
            $return .= str_pad(base_convert($v, 32, 2), 5, 0, STR_PAD_LEFT);
        }

        return $return;
    }

    public  function mapDataQry($seriesTable, $geosetId) {
        $where         = [];
        $bindVariables = [];
        $sql_ori = $this->sql;

        if(!($seriesTable && $geosetId)) {
            return array();
        }

        $where[] = " Trim(STATE_CODE) IN (SELECT STATE_CODE FROM ENERDAT.ED_DESC_STATE_CODES where STATE_CODE <> 'US') ";

        $query_string = "SELECT a.STATE_CODE, c.JSON_DATA FROM ENERDAT." . $seriesTable . " a
			LEFT JOIN ENERDAT.DATA_CLOB PARTITION(\"ELEC\") c ON a.series_id = c.series_id ";

        if (!is_null($geosetId)) {
            $where[]                      = "a.GEOSET_ID = :geosetId";
            $bindVariables[':geosetId'] = $geosetId;
        }
        if (!is_null($seriesTable)) {
            //do nothing
        }

        //Add where conditions to sql string
        if (count($where) !== 0) {
            $query_string .= ' WHERE ' . implode(' AND ', $where);
        }

        $orderby = " a.GEOSET_ID, a.STATE_CODE ";
        if ($orderby) {
            $query_string .= ' ORDER BY ' . $orderby;
        }

        $returnArr = array();
        if (stristr($query_string, 'json_data')) {
            $returnArr = $this->getJSON_result($query_string, $bindVariables, $sql_ori, 1);
        }

        return array_values($returnArr);
    }    

    public function getTableData($topic, $agg, $freq, $inputs) {
        $dataTopics = $this->getDataTopics();
        $dataTopic = isset($dataTopics[$topic]) && !empty($dataTopics[$topic]) ? $dataTopics[$topic] : array();
        
        if (empty($dataTopic)) {
            return array();
        }

        $aggColumns = $dataTopic["aggColumns"];
        $agg = $this->validateAgg($aggColumns, $agg);
        $freq = $this->validateFreq($dataTopic["hasAnnual"],$dataTopic["hasMonthly"], $dataTopic["hasQuarterly"], $freq);

        //get last 2 from agg
        $agg_array = explode(",", $agg);
        $agg_array_count = count($agg_array);
        if ($agg_array_count > 2) {
            $last2Aggs_array[0] = $agg_array[$agg_array_count-2];
            $last2Aggs_array[1] = $agg_array[$agg_array_count-1];
            $last2Aggs_array_count = count($last2Aggs_array);
        } else {
            $last2Aggs_array = $agg_array;
            $last2Aggs_array_count = count($agg_array);
        }

        $aggColumnItems = array();

        //print "<br/>-------------loop for aggColumns";
        foreach($aggColumns as $k1=>$v1) {

            $availableFilterValues = $v1["filterGroup"]["filterValues"];
            $aggId = $v1['aggColumnId'];

            $aggColumnItems[$aggId] = array();
            $aggColumnItems[$aggId]["AGG_COLUMN_VALUE"] = $v1;
            $aggColumnItems[$aggId]["TABLE_COLUMN"] = $v1['tableColumn'];
            $aggColumnItems[$aggId]["FILTER_GROUP_ID"] = $v1['filterGroup']['filterGroupId'];

            //If a filter was passed as an argument for this aggColumn use it, otherwise use the first filterValue
            if(in_array($v1['filterGroup']['varName'] ,array_keys($inputs))) {
                //hshah print "--" . $inputs[$v1['filterGroup']['varName']];
                $filterIndices = implode("," , $this->buildFilterIndices($inputs[$v1['filterGroup']['varName']]));
            } else {
                if (!empty($availableFilterValues)) {
                    $filterIndices = "0";
                }
                else {
                    $filterIndices = "";
                }
            }
            $filterIndices_array = explode(",", $filterIndices);

            if(!in_array($v1["aggColumnId"], $last2Aggs_array)) {
                $filterIndices = !empty($filterIndices_array) ? $filterIndices_array[0] : "";
                $filterIndices_array = explode(",", $filterIndices);
            }

            $filterValuesArr = array();
            $aggColumnItems[$aggId]["FILTER_STRING"] = "";
            $aggColumnItems[$aggId]["FILTER_STRING_NO_DATA"] = "";
            $filterValueStruct = array();

            //Loop through all filter values and grab the ones specified in the arguments passed in
            foreach($availableFilterValues as $k2=>$v2) {
                if(in_array($v2["valueId"], $filterIndices_array)) {
                    $filterValuesArr[] = $v2;
                    if($aggColumnItems[$aggId]["FILTER_STRING"] != '')
                        $aggColumnItems[$aggId]["FILTER_STRING"] .= "," .  $v2["filterValue"];
                    else
                        $aggColumnItems[$aggId]["FILTER_STRING"] = $v2["filterValue"];
                }
                $filterValueStruct[$v2["valueId"]] = $v2;
            }

            if($aggColumnItems[$aggId]["FILTER_STRING"] == '' && count($availableFilterValues) > 0) {
                $filterValuesArr[] = $availableFilterValues[0];
                if($aggColumnItems[$aggId]["FILTER_STRING"])
                    $aggColumnItems[$aggId]["FILTER_STRING"] .= "," . $availableFilterValues[0]["filterValue"];
                else
                    $aggColumnItems[$aggId]["FILTER_STRING"] = $availableFilterValues[0]["filterValue"];
            }
            $aggColumnItems[$aggId]["FILTER_ARRAY"] = $filterValuesArr;
            $aggColumnItems[$aggId]["FILTER_STRING_NO_DATA"] = $aggColumnItems[$aggId]["FILTER_STRING"];

            foreach($filterValuesArr as $k3=>$v3) {
                unset($parentValueId);
                $parentValueId = $v3["parentValueId"];
                $tmp_arr = explode(",", $aggColumnItems[$aggId]["FILTER_STRING_NO_DATA"]);
                $continue = (isset($parentValueId) && ($parentValueId !== '') && array_search($parentValueId, $tmp_arr) === false ) ? true : false;
                while($continue) {
                    $aggColumnItems[$aggId]["FILTER_STRING_NO_DATA"] .= "," . $filterValueStruct[$parentValueId]["filterValue"];
                    $parentValueId = $filterValueStruct[$parentValueId]["parentValueId"];
                    $tmp_arr = explode(",", $aggColumnItems[$aggId]["FILTER_STRING_NO_DATA"]);
                    $continue = ( isset($parentValueId)  && ($parentValueId !== '') && array_search($parentValueId, $tmp_arr) === false ) ? true : false;
                }

            }

        }
        $filterValues = '';
        $filterValuesNoData = '';
        foreach(array_keys($aggColumnItems) as $k3=>$v3) {

            if(array_search($v3, $agg_array) + 1 == ($agg_array_count) ) {
                if($filterValues != '')
                    $filterValues .= "," . $aggColumnItems[$v3]["FILTER_STRING"];
                else
                    $filterValues =  $aggColumnItems[$v3]["FILTER_STRING"];
            }
            if($filterValuesNoData != '')
                $filterValuesNoData .= "," . $aggColumnItems[$v3]["FILTER_STRING_NO_DATA"];
            else
                $filterValuesNoData = $aggColumnItems[$v3]["FILTER_STRING_NO_DATA"];
        }
        $filterValues_array = explode(",", $filterValues);

        $filterGroupIds = '';
        foreach($last2Aggs_array as $k3=>$v3) {
            if($filterGroupIds)
                $filterGroupIds .= "," . $aggColumnItems[$v3]["FILTER_GROUP_ID"];
            else
                $filterGroupIds = $aggColumnItems[$v3]["FILTER_GROUP_ID"];
        }
        $filterGroupIds_array = explode(",", $filterGroupIds);

        $tableTitle = $dataTopic["description"];
        $tableUnits = $dataTopic["units"] ? $dataTopic["units"] : "";
        $substituteUnits = (stripos($dataTopic["units"], "physical units") === false) ? false : true;

        if($agg_array_count > 2) {
            $tableTitle = $tableTitle . " for ";
            for($i=0; $i<$agg_array_count-2; $i++) {
                $tableTitle = $tableTitle . $aggColumnItems[$agg_array[$i]]["FILTER_ARRAY"][0]["description"] . ", ";
                if($aggColumnItems[$agg_array[$i]]["FILTER_ARRAY"][0]["units"] != '')
                    $tableUnits = str_replace('physical units', $aggColumnItems[$agg_array[$i]]["FILTER_ARRAY"][0]["units"], $dataTopic["units"]);
            }
            $tableTitle = substr($tableTitle, 0, strlen($tableTitle) - 2);
        }

        /*
         gets an array of the filterGroupIds in based on the SERIES_ID_ORDER value of each AggColumn
            used in constructing the series id's
        */
        $aggColumnsStructs = $this->buildFilterGroupIdOrderArray($aggColumns);

        for($i=0; $i<$agg_array_count-2; $i++) {
            foreach($aggColumnsStructs as $k3=>$v3) {
                $tmpkey = $agg_array[$i];
                if($v3["FILTERGROUPID"] == $aggColumnItems[$tmpkey]["FILTER_GROUP_ID"]) {
                    //print "<br/>found: tmpkey:$tmpkey >> " . $aggColumnItems[$tmpkey]["FILTER_STRING"];
                    $aggColumnsStructs[$k3]["DEFAULTVALUE"] = $aggColumnItems[$tmpkey]["FILTER_STRING"];
                }
            }
        }

        //print_r($filterValuesNoData);

        //run query: $hierarchyQuery and get the result set array
        $res_hierarchyQuery = $this->get_hierarchyQuery($aggColumnItems, $last2Aggs_array, $filterValues_array, $filterValuesNoData);
        //print count($res_hierarchyQuery);
        //exit;

        //run query: $dataQuery and get the result set array
        $res_dataQuery = $this->get_dataQuery($dataTopic["seriesTable"], $freq, $dataTopic["dataType"], $aggColumnItems);

        $dataStruct = array();
        foreach($res_dataQuery as $k3=>$v3) {
            $dataStruct[$v3['series_id']] = array(
              "DATA" => ($v3['json_data']) ? $v3['json_data'] : '',
              "RSE_DATA" => ($v3['json_rse']) ? $v3['json_rse'] : '',
              "NAME" => $v3['name'],
              "UNITS" => $v3['units'],
              "PRECISION" => $v3['precision'],
              "GEOSET_ID" => $v3['geoset_id'],
              "GEOSET_NAME" => $v3['geoset_name']
            );
        }

        $ret = array();
        $dataColumns = array();
        if($freq == "A") {
            $dataColumns = $this->getDataColumns($freq, $dataTopic["annualStart"], $dataTopic["annualEnd"]);
        } elseif($freq == "M") {
            $dataColumns = $this->getDataColumns($freq, $dataTopic["monthlyStart"], $dataTopic["monthlyEnd"]);
        } elseif($freq == "Q") {
            $dataColumns = $this->getDataColumns($freq, $dataTopic["quarterlyStart"], $dataTopic["quarterlyEnd"]);
        }

        $defaultRowObject = $this->createDefaultRowObject($dataColumns);
        $levelIncrement = 0;

        //loop through row hierarchy to create row objects and attach data from dataQuery
        foreach($res_hierarchyQuery as $k3=>$v3) {
            $levelIncrement = (array_search($v3['filter_group_id'], $filterGroupIds_array) !== false) ? (array_search($v3['filter_group_id'], $filterGroupIds_array)) + 1 : 0;
            $levelIncrement = ($levelIncrement <= 0) ? 0 : $levelIncrement - 1;
            $row = array();
            $row["DATA"] = $defaultRowObject;
            $row["RSE_DATA"] = $defaultRowObject;
            $row["DESCRIPTION"] = (($v3['has_data']) && ($v3['data_description'])) ? ucfirst($v3['data_description']) : ucfirst($v3['description']);
            $row["LEVEL"] = $v3['hier_level'] + $levelIncrement;
            $chartNameStruct = json_decode("{" . $v3['path'] . "}");

            $row["CHART_NAME"] = '';
            for($i = 0; $i < $last2Aggs_array_count; $i++) {
                $key = $aggColumnItems[$last2Aggs_array[$i]]['FILTER_GROUP_ID'];
                if(isset($chartNameStruct->$key)) {
                    $row["CHART_NAME"] = ($row["CHART_NAME"] == '' ? $row["CHART_NAME"] : ($row["CHART_NAME"] . ' : ')) . $chartNameStruct->$key ;
                }
            }
            $row["CHART_NAME"] = ucfirst($row["CHART_NAME"]);
            $row["SERIES_ID"] = "ELEC." . $dataTopic["dataType"] . "." . $this->buildSeriesId(json_decode("{" . $v3['value_path'] . "}", true), $aggColumnsStructs) . "." . $freq;

            $row["HAS_DATA"] = ($v3['has_data'] && $row["SERIES_ID"]) ? true : false;
            $row["SHOW_UNITS"] = ($substituteUnits && $v3['units']) ? true : false;
            $row["PRECISION"] = (!array_key_exists('precision_path', $v3) || !$v3['precision_path']) ? $dataTopic["precision"] : $v3['precision_path'];
            $row["NO_DATA_BREAKDOWN"] = (array_key_exists('no_data_breakdown', $v3) && !is_null($v3['no_data_breakdown']) && strlen($v3['no_data_breakdown']) > 0) ? true : false;

            if(isset($dataStruct[$row["SERIES_ID"]])) {
                $data = array();
                $data = $dataStruct[$row["SERIES_ID"]];

                if($data['DATA']) {

                    $tmpArr = json_decode($data['DATA']);
                    foreach($tmpArr as $k2=>$v2)
                        if(isset($row["DATA"][$k2]))
                            $row["DATA"][$k2] = $v2;
                }
                if($data['RSE_DATA']) {

                    $tmpArr = json_decode($data['RSE_DATA']);
                    foreach($tmpArr as $k2=>$v2)
                        if(isset($row["RSE_DATA"][$k2]))
                            $row["RSE_DATA"][$k2] = $v2;
                }
                $row["PINNED_NAME"] = $data["NAME"];
                $row["UNITS"] = $data["UNITS"];
                $row["GEOSET_ID"] = $data["GEOSET_ID"];
            }

            if(! in_array($topic, $this->not_allowed_topics)) {
                $ret[] = $row;
            }
            else {
                if(! $row["HAS_DATA"]) {
                    if(count($ret) > 0 && !$ret[count($ret)-1]["HAS_DATA"]) {
                        $ret[count($ret)-1] = $row;
                    }
                    else {
                        $ret[] = $row;
                    }
                }
                else if(isset($dataStruct[$row["SERIES_ID"]]) and preg_match("/\d/", $dataStruct[$row['SERIES_ID']]['DATA'])){
                    $ret[] = $row;
                }
            }

        }

        if(!$ret[count($ret)-1]["HAS_DATA"])
            array_pop($ret);

        $returnArr = array(
          "ROWS" => $ret,
          "DATACOLUMNS" => $dataColumns,
          "UNITS" => ($tableUnits == $dataTopic["units"] && $substituteUnits) ? "" : $tableUnits,
          "DESCRIPTION" => ucfirst($tableTitle)
        );

        return $returnArr;
    }

    public function getMapData($geosetId, $topic) {
        $dataTopics = $this->getDataTopics();

        try {
            $geosetId_arr = explode(".", $geosetId);
            $dataType = $geosetId_arr[1];
            $freq = $geosetId_arr[count($geosetId_arr)-1];
            $dataTopic = array();

            //Getting the dataTopic object relevant for the passed in seriesId
            $dataTopics_keys = array_keys($dataTopics);
            foreach($dataTopics_keys as $v0) {
                if($dataTopics[$v0]['dataType'] == $dataType)
                    $dataTopic = $dataTopics[$v0];
            }
            if(empty($dataTopic))
                return array();

            $topic = $dataTopic['dataTopicId'];

            $aggColumns = array();
            
            foreach ($dataTopics as $v0) {
                foreach($v0['aggColumns'] as $v1) {
                    if($v1['topicId'] == $topic) {
                        $aggColumns[] = $v1;
                    }
                }
            }
            
            $seriesComponents = $geosetId_arr[2];

            $seriesTable = $dataTopic['seriesTable'];
            $mapDataQry = $this->mapDataQry($seriesTable, $geosetId);

            $retData = array();

            $dataColumns = $this->getDataColumns($freq, $dataTopic['monthlyEnd'], $dataTopic['monthlyEnd']);

            foreach($mapDataQry as $v0) {
                $dataStruct = ($v0['json_data']) ? json_decode($v0['json_data']) : array();

                foreach($dataColumns as $v1) {
                    if(isset($dataStruct->$v1)) {
                        if (!isset($retData[$v1])) {
                            $retData[$v1] = array();
                        }
                        if (is_numeric($dataStruct->$v1)) {
                            $tmpKey = 'US-' . trim($v0['state_code']);
                            $retData[$v1][$tmpKey] = $dataStruct->$v1;
                        }
                    }
                }
            }

            //Code to generate the map title
            $count = 0;
            $mapTitle = $dataTopic['description'];
            foreach($aggColumns as $k0=>$v0) {
                if($v0['isGeoset'] == 0) {
                    $tmpArr = $v0['filterGroup']['filterValues'];
                    foreach($tmpArr as $k1=>$v1) {
                        $tmpArr1 = explode("-", $seriesComponents);
                        if($tmpArr1[$count] == $v1['filterValue']) {
                            $mapTitle .= ' : ' . $v1['description'];
                            break;
                        }
                    }
                    $count++;
                }
            }

            $returnArr = array(
              "DATACOLUMNS" => $dataColumns,
              "DATA" => $retData,
              "TITLE" => ucfirst($mapTitle)
            );

            return $returnArr;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
