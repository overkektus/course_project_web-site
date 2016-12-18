function slowScroll(id) {
	var offset = 66;
	$('html, body').animate ({
		scrollTop: $(id).offset ().top - offset
	}, 500);
	return false;
}