@if ($message = \Illuminate\Support\Facades\Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = \Illuminate\Support\Facades\Session::get('error'))
    <div class="alert alert-danger alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif
<div id="example-table"></div>
<form action="{{ route('contact-us.store') }}" method="post" id="contactForm">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" class="form-control" id="name">
                @error('name')
                <label id="name-error" class="error name-danger" for="email">{{ $message }}</label>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" class="form-control" id="email">
                @error('email')
                <label id="email-error" class="error text-danger" for="email">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="company_name" id="companyName" placeholder="Company Name" class="form-control">
                @error('company_name')
                <label id="companyName-error" class="error text-danger" for="companyName">{{ $message }}</label>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" placeholder="Contact Number" class="form-control" name="contact_number" id="mobile">
                @error('mobile')
                <label id="mobile-error" class="error text-danger" for="companyName">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
                @error('subject')
                <label id="subject-error" class="error text-danger" for="subject">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Message" id="message"></textarea>
        @error('message')
        <label id="message-error" class="error text-danger" for="message">{{ $message }}</label>
        @enderror
    </div>
    <div class="submit_button text-center">
        <button type="submit" class="btn">Send Message</button>
    </div>

    <h5 class="mt-5 text-center"> Our team looks forward to providing you with excellent
        customer
        service and ensuring your import
        experience is smooth and successful. Don't hesitate to get in touch with us today!</h5>
</form>
