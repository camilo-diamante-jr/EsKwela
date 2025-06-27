$(document).ready(function () {
	initiateLogin();
});

function initiateLogin() {
	$("#loginSubmitForm").on("submit", (e) => {
		e.preventDefault();
	});
}
