<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <style>
        /* Add your custom styles here */
    </style>

    <div class="email-container">
        {{ $header ?? '' }}

        <div class="email-body">
            {{ $slot }}
        </div>

        {{ $subcopy ?? '' }}

        {{ $footer ?? '' }}
    </div>
</body>
</html>
