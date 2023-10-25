<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brazilian Cars</title>
    {{-- Richiamo Vite --}}
    @vite(['resouces/css/app.css', 'resouces/css/app.js'])
</head>

<body>
    <main class="min-vh-100">
        {{ $slot }}
    </main>
</body>

</html>
