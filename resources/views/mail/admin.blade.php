@component('mail::message')
    Dear Admin,<br>
    You have received a new contact form submission. Here are the details:<br>
    <table>
        <tbody>
        <tr>
            <td><strong>Name:</strong></td>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <td><strong>Email Address:</strong></td>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <td><strong>Company Name:</strong></td>
            <td>{{ $contact->company_name }}</td>
        </tr>
        <tr>
            <td><strong>Contact Number:</strong></td>
            <td>{{ $contact->contact_number }}</td>
        </tr>
        <tr>
            <td><strong>Country:</strong></td>
            <td>{{ $contact->country_name  }}</td>
        </tr>
        <tr>
            <td><strong>Subject:</strong></td>
            <td>{{ $contact->subject ?? '' }}</td>
        </tr>
        <tr>
            <td><strong>Message:</strong></td>
            <td>{{ $contact->message ?? '' }}</td>
        </tr>
        </tbody>
    </table>
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
