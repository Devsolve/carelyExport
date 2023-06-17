@component('mail::message')
    Hello Admin,
    You got a new mail. Please check the following details.

    <table>
        <tbody>
        <tr>
            <td>Name</td>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <td>Company Name</td>
            <td>{{ $contact->company_name }}</td>
        </tr>
        <tr>
            <td>Contact Number</td>
            <td>{{ $contact->contact_number }}</td>
        </tr>
        <tr>
            <td>Country</td>
            <td>{{ $contact->country_name  }}</td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>{{ $contact->subject ?? '' }}</td>
        </tr>
        <tr>
            <td>Message</td>
            <td>{{ $contact->message ?? '' }}</td>
        </tr>
        </tbody>
    </table>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
