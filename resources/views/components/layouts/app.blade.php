<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <title>Biblioteca</title>
</head>
<body>
    <x-admin.menu-lateral/>
    <main class="ml-auto mb-6 w-[85%]">
        <div class="px-6 pt-6">
            {{ $slot }}
        </div>


    </main>
    <x-admin.toastify />
</body>
</html>
