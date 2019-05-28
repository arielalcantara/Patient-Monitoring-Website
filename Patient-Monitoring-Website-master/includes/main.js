// Toggle Mobile Navigation Bar
$(document).ready(function() {
	$("#menu-toggle").click(function() {
		$("#mobile-header nav").slideToggle();
	});
});
// Toggle Add Account/Record Modal 
$(document).ready(function() {
	$("#add-btn").click(function() {
		$("#modal").fadeIn();
	});
	$("#close-btn").click(function() {
		$("#modal").fadeOut();
	});
	$(window).click(function(e) {
		if (e.target == modal) {
			$("#modal").fadeOut();
		};
	});
});
// Search and Filter List
function search() {
	let input, filter, ul, li, a, i;
	input = document.getElementById("search-bar");
	filter = input.value.toLowerCase();
	ul = document.getElementById("ul");
	li = ul.getElementsByTagName("li");
	for (i = 0; i < li.length; i++) {
		a = li[i].getElementsByTagName("a")[0];
		if (a.innerHTML.toLowerCase().indexOf(filter) > -1) {
			li[i].style.display = "";
		} else {
			li[i].style.display = "none";
		}
	}
}