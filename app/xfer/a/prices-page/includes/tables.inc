<section class="margin-bottom" id="table_data">
	<h2>Average retail price of electricity (cents per kilowatthour)</h2>
	<div class="responsive-table">
		<table class="responsive-table full-width sticky">
			<thead>
				<tr>
					<th scope="col"></th>
					<?php foreach (array_reverse($data['DATACOLUMNS']) as $colums) {?>
					<th scope="col"><?= DateTime::createFromFormat('Ym', $colums)->format('M Y'); ?></th>
					<?php }; ?>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data['ROWS'] as $row) {?>
				<tr>
					<th scope="row"><?= $row['DESCRIPTION'] ?></th>
					<?php foreach(array_reverse($row['DATA']) as  $rowData) { ?>
					<?php if($row['LEVEL'] != 0) { ?>
					<td><?= $rowData; ?></td>
					<?php } else { ?>
					<td></td>
					<?php }; ?>
					<?php }; ?>
				</tr>
				<?php }; ?>
			</tbody>
		</table>
	</div>
</section>