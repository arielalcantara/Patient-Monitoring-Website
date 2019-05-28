// Mobile Menu Bar Toggle
let toggleMenuStatus = false;
let toggleMenu = function() {
	let getNav = document.querySelector('#mobile-header nav');
	if (toggleMenuStatus === false) {
		getNav.style.visibility = "visible";
		toggleMenuStatus = true;
	} else if (toggleMenuStatus === true) {
		getNav.style.visibility = "hidden";
		toggleMenuStatus = false;
	}
}
// Add Account - Toggle
let getModal = document.getElementById('modal');
let modalOpenBtn = document.getElementById('add-btn');
let modalCloseBtn = document.getElementById('close-btn');
let modalClose = document.getElementById('modal');
modalOpenBtn.addEventListener('click', openModal); 
modalCloseBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideModal);
function openModal() {
	getModal.style.display = "block";
}
function closeModal() {
	getModal.style.display = "none";
}
function outsideModal (e) {
	if (e.target == modal) {
		getModal.style.display = "none";
	}
}
// Add Record - Toggle
/*$(document).ready(function() {
	$("#add-rec-btn").click(function() {
		$("#modal").show();
	});
});*/

