<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroes Academy</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if( session('success') )
        <div class="p-4 text-center bg-green-500 font-bold text-white">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav>
            <h1>Heroes Academy</h1>
            <a href="{{ route('heroes.index') }}">
                All Heroes
            </a>
            <a href="{{ route('heroes.create') }}">
                Add Heroes
            </a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
