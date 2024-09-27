<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-950 text-white">
@if(session('message'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ session('message') }}',
            showConfirmButton: false,
            timer: 1800 // Auto close after 1.5 seconds
        });
    </script>
@endif
<div class="px-10">
    <nav class="flex justify-between items-center border-b p-2 border-white/20">
        <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
        <div class="space-x-4">
            <a href="/">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>
        <div class="flex gap-x-4">
            @auth
                <a href="jobs/create">Post a Job</a>
                <x-forms.form class="h-fit" method="Post" action="/logout">
                    @method('DELETE')
                    <button style="margin: 0 !important; ">Log Out</button>
                </x-forms.form>
            @endauth
            @guest
                <div class="space-x-4">
                    <a href="/login">Sign Up</a>
                    <a href="/register">Register</a>
                </div>
            @endguest
        </div>

    </nav>
    <main class="max-w-[980px] m-auto py-10">
        {{ $slot }}
    </main>
</div>
</body>
</html>
