<x-layout>
    <h2>{{ $hero->name }}</h2>
    <div>
        <p><strong>skill level: </strong>{{ $hero->skill }}</p>
        <p><strong>Description:</strong></p>
        <p>{{ $hero->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Universe information</h3>
        <p><strong>Name: </strong> {{ $hero->universe->name }} </p>
        <p><strong>Location: </strong> {{ $hero->universe->location }} </p>
        <p><strong>Description: </strong></p>
        <p> {{ $hero->universe->description }} </p>

        <div class="flex gap-4">
            <a href="{{ route('heroes.edit', $hero->id) }}">
                <button class="btn">
                    Edit Hero
                </button>
            </a>

            <form action="{{ route('heroes.destroy', $hero->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn">
                    Delete Hero
                </button>
            </form>
        </div>
    </div>
</x-layout>
