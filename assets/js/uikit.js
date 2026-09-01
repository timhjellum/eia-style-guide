import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';


class UIKit {
	constructor() {
		document.addEventListener('uikit:init', () => {
			UIkit.modal()
			UIkit.icon()
			// loads the Icon plugin
			UIkit.use(Icons);
			UIkit.scrollspyNav();
		})


		const rightColumn = document.getElementById('rightColumn')
		const secondaryNavigation = document.getElementById('secondaryNavigation')
		rightColumn.append(secondaryNavigation)
	}
}
export default UIKit