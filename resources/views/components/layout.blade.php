<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post REST API</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-mono">

    <div class="py-8 flex flex-col gap-8 justify-center items-center">

        {{$slot}}

    </div>

</body>
</html>