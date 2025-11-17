function isElementTopAboveViewport(el) {
	if (!(el instanceof Element)) {
		//console.error("Invalid element provided.");
		return false;
	}
	const rect = el.getBoundingClientRect();
	return rect.top < 0; // Top is above the viewport
}

window.addEventListener("scroll", () => {
	const stickyTables = document.querySelectorAll(".sticky");

	stickyTables.forEach((target) => {
		if (isElementTopAboveViewport(target)) {
			//console.log("Element's top is above the viewport.");
			target.classList.add('shadow')
		} else {
			//console.log("Element's top is visible or below.");
			target.classList.remove('shadow')
		}
	});
});

const scrollTop = document.querySelector('.scroll-top')
scrollTop.addEventListener("click", (event) => {
  event.preventDefault()
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  })
})