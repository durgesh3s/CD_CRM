// Form submission handle

$(document).ready(function () {
    $("#moduleForm").on("submit", function (e) {
        e.preventDefault();

        const formData = $(this).serializeArray();
        let data = {};

        $.each(formData, function (_, field) {
            data[field.name] = field.value;
        });

        $.ajax({
            url: "/api/crm/modules/module",
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Accept: "application/json",
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: JSON.stringify(data),
            success: function (data) {
                if (data.success) {
                    localStorage.setItem("showSuccessAlert", "true");
                    window.location.href = "/";
                } else {
                    localStorage.setItem("showUnsuccessAlert", "true");
                    // alert("Name Taken")
                }
            },
            error: function () {
                localStorage.setItem("showErrorAlert", "true");
                alert("Name Taken")

            },
        });
    });
});

// Getting module data from an API

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/api/crm/modules/details",
        success: function (response) {
            if (response.success) {
                let mainNavbar = $("#append-nav-items");
                let dropdownList = $("#nav-dropdown");

                let maxVisibleItems = 5;
                let modules = response.details;

                if (Array.isArray(modules)) {
                    modules.forEach(function (module, index) {
                        let modulename = module.Name;
                        let moduleUrl = route(module.show, {
                            name: modulename,
                        });
                        let navItem = $(
                            '<li class="nav-item"><a class="nav-link" href="#">' +
                                modulename +
                                "</a></li>"
                        );

                        if (index < maxVisibleItems) {
                            mainNavbar.append(navItem);
                        } else {
                            dropdownList.append(
                                '<li><a class="dropdown-item" href="">' +
                                    modulename +
                                    "</a></li>"
                            );
                        }
                    });
                }
            }
        },
    });
});
