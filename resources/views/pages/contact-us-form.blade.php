<div id="server_error"></div>
<form action="{{ route('contact-us.store') }}" method="post" id="contactForm">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" class="form-control" id="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" class="form-control" id="email">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="company_name" id="company_name" placeholder="Company Name" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-5" style="height: 60px;">
                <input type="text" placeholder="Contact Number" class="form-control" name="contact_number" id="contact_number">
                <input type="hidden" name="country_code" value="" id="country_code">
                <input type="hidden" name="country_name" value="" id="country_name">
                <span id="country_code-error" class="error text-danger"></span>
                <span id="country_name-error" class="error text-danger"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Message" id="message"></textarea>
    </div>
    <div class="submit_button text-center">
        <button type="submit" class="btn">Send Message</button>
    </div>

    <h5 class="mt-5 text-center"> Our team looks forward to providing you with excellent
        customer
        service and ensuring your import
        experience is smooth and successful. Don't hesitate to get in touch with us today!</h5>
</form>
