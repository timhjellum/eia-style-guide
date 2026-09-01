import Lenis from "https://esm.sh/lenis@1.3.24";

const lenis = new Lenis({
	autoRaf: true
});

// Listen for the scroll event and log the event data
lenis.on("scroll", (e) => {
	console.log("scrolling " + e);
});
