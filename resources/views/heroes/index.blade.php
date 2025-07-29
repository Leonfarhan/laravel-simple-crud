<x-layout>
    <h2 class="text-xl font-bold my-4">List of available heroes</h2>
    <ul class="my-10">
        <li>
            @foreach($dataHeroes as $data)
                <x-card href="{{ route('heroes.show', $data['id']) }}" :highlight="$data['skill'] > 70">
                    <div>
                        <h3 class="text-lg font-bold my-4">{{ $data['name'] }}</h3>
                        <p class="my-2">{{ $data->universe->name }}</p>
                    </div>
                </x-card>
            @endforeach
        </li>
    </ul>

    <div class="mt-8">
        {{ $dataHeroes->links() }}
    </div>
</x-layout>
