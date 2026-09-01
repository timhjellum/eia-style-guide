// 1. Centralized blueprint for all 50 pages grouped by your 5 topics
const routeConfig = {
	"/buttons/primary": {
		title: "Primary Button",
		topic: "base",
		filePath: "./layouts/primary.js"
	},
	"/buttons/secondary": {
		title: "Secondary Button",
		topic: "base",
		filePath: "./layouts//secondary.js"
	},
	"/forms/inputs": {
		title: "Text Inputs",
		topic: "layouts",
		filePath: "./base/inputs.js"
	},
	"/forms/checkboxes": {
		title: "Checkboxes",
		topic: "layouts",
		filePath: "./base/checkbox.js"
	}
};

// 2. Build the Navigation Sidebar automatically
function generateSidebar() {
	const sidebar = document.getElementById("sidebar-nav");
	if (!sidebar) return;

	// Group paths by their topic title
	const topics = {};
	for (const [path, info] of Object.entries(routeConfig)) {
		if (!topics[info.topic]) {
			topics[info.topic] = [];
		}
		topics[info.topic].push({ path, title: info.title });
	}

	// Generate HTML blocks for each topic heading and its links
	let sidebarHTML = "";
	for (const [topicName, pages] of Object.entries(topics)) {
		sidebarHTML += `<div><button id="${topicName}"><h3 class="nav-topic-heading">${topicName}</h3>
						<svg class="arrow-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z" fill="currentColor"></path>
						</svg>
					</button><ul id="${topicName}-sub-nav" class="sub-nav">`;
		pages.forEach((page) => {
			sidebarHTML += `
        <li><a href="${page.path}" class="nav-link" data-link data-path="${page.path}">
          ${page.title}
        </a></li>
      `;
		});
		sidebarHTML += `</div>`;
	}

	sidebar.innerHTML = sidebarHTML;
}

// 3. Highlight the actively viewed link in the sidebar
function updateActiveLink(currentPath) {
	document.querySelectorAll("nav .nav-link").forEach((link) => {
		if (link.getAttribute("data-path") === currentPath) {
			link.classList.add("active");
		} else {
			link.classList.remove("active");
		}
	});
}

// 3. Asynchronous Render Engine
async function renderPage(path) {
	const pageInfo = routeConfig[path];
	const sandbox = document.getElementById("preview-sandbox");
	const titleEl = document.getElementById("page-title");
	const codeEl = document.getElementById("code-output");

	// Highlight the current link in the sidebar
	updateActiveLink(path);

	if (!pageInfo) {
		titleEl.textContent = "404";
		codeEl.textContent = "";
		if (sandbox.shadowRoot)
			sandbox.shadowRoot.innerHTML = "<p>Page Not Found</p>";
		return;
	}

	try {
		const module = await import(pageInfo.filePath);
		const page = module.default;

		titleEl.textContent = page.title;
		codeEl.textContent = page.html.trim();

		let shadow = sandbox.shadowRoot;
		if (!shadow) {
			shadow = sandbox.attachShadow({ mode: "open" });
		}

		shadow.innerHTML = `
      <style>${page.css}</style>
      <div>${page.html}</div>
    `;
	} catch (error) {
		console.error("Failed to load pattern page:", error);
		titleEl.textContent = "Error Loading Page";
	}
}

// 4. Update the Startup Listener to build the sidebar first
document.addEventListener("DOMContentLoaded", () => {
	generateSidebar(); // <-- Generates the HTML menus automatically

	// Render the initial route or fallback to your default
	const defaultPath = Object.keys(routeConfig)[0] || "/landing/index";
	renderPage(window.location.pathname || defaultPath);
});

// Keep your click and popstate event listeners exactly the same as before!
document.addEventListener("click", (e) => {
	if (e.target.matches("[data-link]")) {
		e.preventDefault();
		const targetPath = e.target.getAttribute("href");
		window.history.pushState({}, "", targetPath);
		renderPage(targetPath);
	}
});

window.addEventListener("popstate", () => {
	renderPage(window.location.pathname);
});
