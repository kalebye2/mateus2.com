let images_to_load = document.querySelectorAll("img[src*='-low']");

document.addEventListener("DOMContentLoaded", () => {
	images_to_load.forEach( (img) => {
		img.setAttribute("src", img.getAttribute("src").replace("-low", ""));
	});
});
