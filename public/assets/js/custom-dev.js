$(document).ready(function () {
    var input = document.querySelector("#mobile");
    var iti = intlTelInput(input);
    window.intlTelInput(input, {
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        separateDialCode: false,
        autoPlaceholder: "off",
        initialCountry: "auto",
        geoIpLookup: callback => {
            fetch("https://ipapi.co/json")
                .then(res => res.json())
                .then(data => callback(data.country_code))
                .catch(() => callback("ind"));
        },
    });
    var number = iti.getNumber();
    $('#countryCode').val(number);
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
