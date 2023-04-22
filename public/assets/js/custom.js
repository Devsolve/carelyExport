$(document).ready(function () {
    $("#countryCode").countrySelect({
        defaultCountry: "in",
    });

    $("#contactForm").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
            },
            country_code: {
                required: true,
            },
            mobile: {
                required: true,
                digits: true,
            },
            subject: {},
            Message: {},
        },
        messages: {
            name: {
                required: "Please input your name",
            },
            email: {
                required: "Please input your email",
            },
            country_code: {
                required: "Country Code is required",
            },
            mobile: {
                required: "Please input your contact number",
                digits: "Please input your valid contact number",
            },
            subject: {},
            Message: {},
        },
        highlight: function (element) {
            $(element).parent().addClass("text-danger");
        },
        unhighlight: function (element) {
            $(element).parent().removeClass("text-danger");
        },
    });
});
