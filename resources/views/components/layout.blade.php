<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/@kingshott/iodine@8.1.0/dist/iodine.min.umd.js" defer></script>
</head>
<body>
    {{ $slot }}
    @livewireScripts
    @stack('scripts')
</body>
</html>