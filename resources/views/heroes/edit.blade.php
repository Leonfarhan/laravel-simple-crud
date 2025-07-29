<x-layout>
    <form action="{{ route('heroes.update', $hero->id) }}" method="POST" class="max-w-screen-sm">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-bold my-4">Edit Heroes: {{ $hero->name }}</h2>

        <label for="name">Hero Name: </label>
        <input type="text" name="name" id="name" required value="{{ $hero->name }}" class="block w-full mt-2 mb-4 p-2 bg-white">

        <label for="skill">Hero Skill from 1 to 100:  </label>
        <input type="number" name="skill" id="skill" required value="{{ $hero->skill }}" class="block w-full mt-2 mb-4 p-2 bg-white">

        <label for="bio">Bio: </label>
        <textarea name="bio" id="bio" cols="30" rows="10" required class="block w-full mt-2 mb-4 p-2 bg-white">{{ $hero->bio }}</textarea>

        <label for="universe_id">Universe: </label>
        <select name="universe_id" id="universe_id" class="block w-full mt-2 mb-4 p-2 bg-white">
            <option value="" selected>{{ $hero->universe_id }}</option>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $universe->id == old('universe_id') ? 'selected': ''}}>{{ $universe->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="rounded px-3 py-2 bg-gray-200 hover:bg-red-500 hover:text-white"> Update Hero </button>

        @if ($errors->any())
            <div class="text-red-500 mb-4">
                <strong>There's a problem: </strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</x-layout>
