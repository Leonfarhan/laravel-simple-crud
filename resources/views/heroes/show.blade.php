<x-layout>
    <h2 class="text-xl font-bold my-4">{{ $hero->name }}</h2>
    <div>
        <p class="my-2"><strong>skill level: </strong>{{ $hero->skill }}</p>
        <p class="my-2"><strong>Description:</strong></p>
        <p class="my-2">{{ $hero->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3 class="text-lg font-bold my-4">Universe information</h3>
        <p class="my-2"><strong>Name: </strong> {{ $hero->universe->name }} </p>
        <p class="my-2"><strong>Location: </strong> {{ $hero->universe->location }} </p>
        <p class="my-2"><strong>Description: </strong></p>
        <p class="my-2"> {{ $hero->universe->description }} </p>

        <div class="flex gap-4">
            <a href="{{ route('heroes.edit', $hero->id) }}">
                <button class="rounded px-3 py-2 bg-gray-200 hover:bg-red-500 hover:text-white">
                    Edit Hero
                </button>
            </a>

            <form action="{{ route('heroes.destroy', $hero->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="rounded px-3 py-2 bg-gray-200 hover:bg-red-500 hover:text-white">
                    Delete Hero
                </button>
            </form>
        </div>
    </div>
</x-layout>
