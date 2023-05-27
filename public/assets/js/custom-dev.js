
function successToastMessage(message) {
    $.toast({
        heading: 'Success',
        text: message,
        icon: 'success',
        position: 'top-right',
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

$(document).ready(function () {
    // if ($('#mobile').length) {
    //     var input = document.querySelector("#mobile");
    //     var iti = intlTelInput(input);
    //     window.intlTelInput(input, {
    //         utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
    //         separateDialCode: false,
    //         autoPlaceholder: "off",
    //         initialCountry: "auto",
    //         geoIpLookup: callback => {
    //             fetch("https://ipapi.co/json")
    //                 .then(res => res.json())
    //                 .then(data => callback(data.country_code))
    //                 .catch(() => callback("ind"));
    //         },
    //     });
    //     var number = iti.getNumber();
    //     $('#countryCode').val(number);
    // }
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
    if ($('#mobile').length) {
        $("#mobile").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
        });
    }

    // if ($('#mobile').length) {
    //     $("#mobile").intlTelInput({
    //         utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
    //         separateDialCode: false,
    //         autoPlaceholder: "off",
    //         initialCountry: "auto",
    //         geoIpLookup: callback => {
    //             fetch("https://ipapi.co/json")
    //                 .then(res => res.json())
    //                 .then(data => callback(data.country_code))
    //                 .catch(() => callback("ind"));
    //         },
    //     });
    // }

    $(document).on("submit", '#contactForm', function (e) {
        e.preventDefault();
        let contactFormSelector = $('#contactForm');
        let loadMessageRemove = $('.loadMessage');

        loadMessageRemove.remove();
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
                } else {
                    var output = '';
                    $.each(response.data, function (key, value) {
                        var html = '<div class="alert alert-danger alert-block loadMessage"><button type="button" class="close" data-dismiss="alert">×</button><strong>' + value + '</strong></div>';
                        output += html;
                    });
                    contactFormSelector.before(output);
                }
                loaderHide($('body'));
            },
            error: function (response) {
                loadMessageRemove.remove();
                loaderHide($('body'));
                failToastMessage(response.message);
            },
        });
    });
});
