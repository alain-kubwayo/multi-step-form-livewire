<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - SUCCESS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="max-w-5xl mx-auto">
        <h1 class="uppercase text-3xl text-green-500 text-center pb-8 border-b border-gray-600">Registration - Successful!</h1>
        <div class="py-20 bg-gray-100 text-md font-semibold">
            Hello <b> {{ request()->name }}</b>, thank you for joining us. You're all set to explore our platform. Your email is {{ request()->email }}
        </div>
        <a href="/" class="bg-green-700 px-2 py-1">Back Home</a>
    </div>
</body>
</html>