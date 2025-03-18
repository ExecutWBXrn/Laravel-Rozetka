@vite(['resources/css/app.css'])
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
<nav>
    <x-nav-bar href="/" :active="request()->is('/')">home</x-nav-bar>
    <x-nav-bar href="/jobs" :active="request()->is('jobs')">jobs</x-nav-bar>
    <x-nav-bar href="/contact" :active="request()->is('contact')">contact</x-nav-bar>
</nav>
    {{ $slot }}
</body>
</html>
