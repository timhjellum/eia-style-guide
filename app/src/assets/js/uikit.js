import UIkit from 'uikit';
//import '../../../node_modules/uikit/dist/js/uikit-icons';


class UIKit {
	constructor() {
		document.addEventListener('uikit:init', () => {
			UIkit.modal()
			//UIkit.icon()
			UIkit.scrollspyNav();
		})


		const rightColumn = document.getElementById('rightColumn')
		const secondaryNavigation = document.getElementById('secondaryNavigation')
		rightColumn.append(secondaryNavigation)
	}
}
export default UIKit