
function successToastMessage(message) {
    $.toast({
        heading: 'Success',
        text: message,
        icon: 'success',
        position: 'bottom-left',
        stack: false
    })
}

function failToastMessage(message) {
    $.toast({
        heading: 'Error',
        text: message,
        icon: 'error',
        position: 'top-right',
        stack: false
    })
}

function fieldErrorMessage(selector, message) {
    $('#'+selector).after('<label id="'+ selector +'-error" class="error text-danger" for="'+ selector +'">' + message + '</label>');
    if($('#'+ selector +'-error').length){
        $('#'+ selector +'-error').html(message);
    }
}
function loaderShow(selector, message){
    selector.loading({
        stoppable: false,
        message: message,
        theme: 'dark'
    });
}

function loaderHide(selector){
    if(selector.is(':loading')){
        selector.loading('stop');
    }
}

function errorTextRemove(){
    $('.error').empty();
    $('.error-element').remove();
}

$(document).ready(function () {
    if($("#contactForm").length) {
        $("#contactForm").validate({
            rules: {
                name: {
                    required: true, pattern: /^[a-zA-Z\s]+$/
                },
                company_name: {
                    required: true, pattern: /^[a-zA-Z\s]+$/
                },
                email: {
                    required: true, email: true, pattern: /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
                },
                contact_number: {
                    required: true, digits: true,
                },
                subject: {
                    required: true,
                },
                message: {},
            }, messages: {
                name: {
                    required: "Please input your name", pattern: "Please input your valid name",
                },
                company_name: {
                    required: "Please input your company name", pattern: "Please input your valid company name",
                },
                email: {
                    required: "Please input your email",
                    email: "Please input your valid email",
                    pattern: "Your email is not valid"
                },
                contact_number: {
                    required: "Please input your contact number", digits: "Please input your valid contact number",
                },
                subject: {
                    required: "Please input your subject",
                }, Message: {},
            }, highlight: function (element) {
                $(element).parent().addClass("text-danger");
            }, unhighlight: function (element) {
                $(element).parent().removeClass("text-danger");
            },
        });
    }
    // -----Country Code Selection
    if ($('#contact_number').length) {

        var input = document.querySelector("#contact_number");
        var iti = window.intlTelInput(input,{
            initialCountry: "auto",
            separateDialCode: true,
            autoPlaceholder: "off",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("ind"));
            },
        });

        input.addEventListener("countrychange", function () {
            const selectedCountryData = iti.getSelectedCountryData();

            const countryCode = selectedCountryData.dialCode;
            const countryName = selectedCountryData.name;

            $('#country_code').val(countryCode);
            $('#country_name').val(countryName);
        });
    }

    $(document).on("submit", '#contactForm', function (e) {
        e.preventDefault();
        errorTextRemove();
        let contactFormSelector = $('#contactForm');
        loaderHide($('body'));

        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            beforeSend: function () {
                loaderShow($('body'),'Please wait...');
            },
            success: function (response) {
                if (response.status === 'success') {
                    successToastMessage(response.message);
                    contactFormSelector[0].reset();
                    loaderHide($('body'));
                } else {
                    if(typeof response.message === "object" && response.message !== null){
                        $.each(response.message, function (key, value) {
                            fieldErrorMessage(key, value[0]);
                        });
                    }else{
                        $('#server_error').html('<div class="alert alert-danger alert-block error-element">'+ response.message +'</div>');
                    }
                    loaderHide($('body'));
                    return false;
                }
            },
            error: function (response) {
                console.log(response);
                loaderHide($('body'));
            },
        });
    });
});
