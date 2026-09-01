class Docking {
	constructor() {
		this.dockButton = document.querySelector("header button");
		this.eventListeners();
	}

	eventListeners() {
		this.dockButton.addEventListener("click", function (event) {
			const nav = document.body;

			if (nav.classList.contains("docked")) {
				nav.classList.remove("docked");
			} else {
				nav.classList.add("docked");
			}
		});
	}
}

document.addEventListener("DOMContentLoaded", () => {
	new Docking();
});
