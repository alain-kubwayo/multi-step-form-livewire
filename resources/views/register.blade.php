<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="max-w-5xl mx-auto">
        <h1 class="uppercase text-3xl text-gray-500 text-center pb-8 border-b border-gray-600">Multi Step Form</h1>
        @livewire('multi-step-form')

    </div>
    @livewireScripts
</body>
</html>