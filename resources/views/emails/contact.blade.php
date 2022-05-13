@component('mail::message')
# Message From {{ $data['email'] }}

Message From Property Site 

<b>Message: </b><br>{{ $data['message'] }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent