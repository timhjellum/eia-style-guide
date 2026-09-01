class Navigation {
	constructor() {
		//this.navItems = document.querySelectorAll(".nav-item");
		this.subNav = document.querySelectorAll(".sub-nav");

		//this.dockButton = document.querySelector("header button");
		//this.addResizeListeners();
		this.eventListeners();
		this.checkSubNavHeight();
		//this.handleResizeEvent;
		//this.setMenuClickListener();
		//this.setSidenavCloseListener();
	}

	checkSubNavHeight() {
		//function getHiddenDimensions(element) {
		this.subNav.forEach((navItem, index) => {
			//const height = navItem.offsetHeight;

			const originalVisibility = navItem.style.visibility;
			const originalPosition = navItem.style.position;
			const originalDisplay = navItem.style.display;

			// Apply temporary styles
			navItem.style.visibility = "hidden";
			navItem.style.position = "absolute";
			if (originalDisplay === "none") {
				navItem.style.display = "block";
			}

			// Read dimensions
			const width = navItem.offsetWidth;
			const height = navItem.scrollHeight;
			//console.log(`Index: ${index}, Width: ${width}, Height: ${height}`);
			document.documentElement.style.setProperty(
				`--sub-nav-height-0${index}`,
				`${height}`
			);
			navItem.style.visibility = originalVisibility;
			navItem.style.position = originalPosition;
			navItem.style.display = originalDisplay;

			return { index, width, height };
		});
	}

	eventListeners() {
		/*
		this.dockButton.addEventListener("click", function (event) {
			const nav = document.body;

			if (nav.classList.contains("docked")) {
				nav.classList.remove("docked");
			} else {
				nav.classList.add("docked");
			}
		});
		*/

		document.getElementById("base").addEventListener("click", () => {
			document.getElementById("base-sub-nav").classList.toggle("active");
		});

		document.getElementById("layouts").addEventListener("click", () => {
			document.getElementById("layouts-sub-nav").classList.toggle("active");
		});
	}

	handleResizeEvent() {
		window.addEventListener("resize", this.handleResize);
	}
	handleResize() {
		const width = window.innerWidth;
		console.log("width: ", width);
		if (width > 750) {
		}
	}
}

document.addEventListener("DOMContentLoaded", () => {
	new Navigation();
});
