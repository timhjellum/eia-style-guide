//import UIkit from 'uikit';
//import Icons from 'uikit/dist/js/uikit-icons';
import UIkit from '../../node_modules/uikit/dist/js/uikit';

class uiKit {
	constructor() {

		// loads the Icon plugin
//UIkit.use(Icons);

// components can be called from the imported UIkit reference
UIkit.notification('Hello world.');

	}
}
export default uiKit

