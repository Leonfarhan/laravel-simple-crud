<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Academy</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-700">
    @if( session('success') )
        <div class="p-4 text-center bg-green-500 font-bold text-white">
            {{ session('success') }}
        </div>
    @endif
    <header class="bg-white">
        <nav class="flex items-center gap-5 max-w-screen-lg px-12 py-4 mx-auto">
            <h1 class="text-2xl font-bold text-red-500 mr-auto">Heroes Academy</h1>
            <a href="{{ route('heroes.index') }}" class="rounded px-3 py-2 bg-gray-200 hover:bg-red-500 hover:text-white">
                All Heroes
            </a>
            <a href="{{ route('heroes.create') }}" class="rounded px-3 py-2 bg-gray-200 hover:bg-red-500 hover:text-white">
                Add Heroes
            </a>
        </nav>
    </header>

    <main class="max-w-screen-lg mx-auto px-12 py-8">
        {{ $slot }}
    </main>
</body>
</html>
