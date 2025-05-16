<x-layout>
    <h2>List of available heroes</h2>
    <ul>
        <li>
            @foreach($dataHeroes as $data)
                <x-card href="{{ route('heroes.show', $data['id']) }}" :highlight="$data['skill'] > 70">
                    <div>
                        <h3>{{ $data['name'] }}</h3>
                        <p>{{ $data->universe->name }}</p>
                    </div>
                </x-card>
            @endforeach
        </li>
    </ul>

    {{ $dataHeroes->links() }}
</x-layout>
