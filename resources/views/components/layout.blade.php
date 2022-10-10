<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/@kingshott/iodine@8.1.0/dist/iodine.min.umd.js" defer></script>
</head>
<body>
    <div class="container">{{ $slot }}</div>
    @livewireScripts
    @stack('scripts')
</body>
</html>