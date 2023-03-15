<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    @livewireStyles
</head>

<body>
    {{-- Materi Form Validation --}}
    {{-- @yield('content') // versi lama --}}

    <!-- Slot Kek yield content -->
    {{ $slot }}

    @livewireScripts
</body>

</html>
