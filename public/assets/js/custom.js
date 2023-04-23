$(document).ready(function () {
    $("#countryCode").countrySelect({
        defaultCountry: "in",
    });

    $("#contactForm").validate({
        rules: {
            name: {
                required: true,
                pattern: /^[a-zA-Z\s]+$/
            },
            email: {
                required: true,
                email: true,
                pattern: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
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
                pattern: "Please input your valid name",
            },
            email: {
                required: "Please input your email",
                email: "Please input your valid email",
                pattern: "Your email is not valid"
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
