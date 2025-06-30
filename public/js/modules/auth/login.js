$(document).ready(function () {
	initiateLogin();
});

function initiateLogin() {
	$("#loginSubmitForm").on("submit", function (e) {
		e.preventDefault();

		const email = $("#email").val().trim();
		const password = $("#password").val().trim();

		if (!email || !password) {
			alert("Email and password are required.");
			return;
		}

		checkValidation(email, password);
	});
}

function checkValidation(email, password) {
	$.ajax({
		url: "/auth/login",
		type: "POST",
		dataType: "json", // This ensures jQuery parses JSON automatically
		data: { email: email, password: password },
		success: function (response) {
			if (response.status === "success") {
				alert(response.message);
				const userType = response.userType;
				redirectByUserType();
			} else {
				alert(response.message);
			}
		},
		error: function (xhr, status, error) {
			console.error("AJAX error:", status, error);
			alert("An error occurred. Please try again.");
		},
	});
}
