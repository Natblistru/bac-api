@component('mail::message')
Hello {{ $user->name ?? ($user->first_name . ' ' . $user->last_name) }},

We understand it happens.

@component('mail::button', ['url' => 'http://localhost:3000/reset-password/' . $user->remember_token])
Reset Your Password
@endcomponent


In case you have any issues recovering your password, please contact us.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
