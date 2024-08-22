@component('mail::message')
# Verify Your Email Address

Please click the button below to verify your email address.

@component('mail::button', ['url' => $actionUrl])
Verify Email Address
@endcomponent

If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
