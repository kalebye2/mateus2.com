const mh = document.getElementById("mouse-highlight");

function move_mouse_trail(e) {
	mh.style.setProperty("top", `${e.y}px`);
	mh.style.setProperty("left", `${e.x}px`);
}

onmousemove = (e) => {
	move_mouse_trail(e);
}
