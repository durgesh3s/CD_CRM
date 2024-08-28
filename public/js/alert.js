// Rendering Success Alert

$(document).ready(function () {
    if (localStorage.getItem("showSuccessAlert") === "true") {
        $("#success-alert-component").show();

        localStorage.removeItem("showSuccessAlert");

        setTimeout(function () {
            $("#success-alert-component").fadeOut();
        }, 4000);
    }
});

// Rendering Unsucess Alert

$(document).ready(function () {
    if (localStorage.getItem("showUnsuccessAlert") === "true") {
        $("#unsuccess-alert-component").show();

        localStorage.removeItem("showUnsuccessAlert");

        setTimeout(function () {
            $("#unsuccess-alert-component").fadeOut();
        }, 4000);
    }
});

// Rendering Error Alert

$(document).ready(function () {
    if (localStorage.getItem("showErrorAlert") === "true") {
        $("#error-alert-component").show();

        localStorage.removeItem("showErrorAlert");

        setTimeout(function () {
            $("#error-alert-component").fadeOut();
        }, 4000);
    }
});
