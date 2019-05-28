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

/* Old Functions
// Toggle Checkup Record
$(document).ready(function () {
	$("#records ul li").click(function (clicked_id) {

		record = window.open("checkuprecords.php", "", "location=1,scrollbars=0,width=100%,height=100%,resizable=no");
		id = $("#records ul li").val();
		alert(clicked_id);
	});
});

let listItem = document.getElementById('#records ul li');
document.addEventListener('click', listItem);
function openRecord() {
	let record = window.open("", "", "location=1,scrollbars=0,width=100%,height=100%,resizable=no");
	record.moveTo(0, 0);
}*/
