<x-layout>
    <form action="{{ route('heroes.update', $hero->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h2>Edit Heroes: {{ $hero->name }}</h2>

        <label for="name">Hero Name: </label>
        <input type="text" name="name" id="name" required value="{{ $hero->name }}">

        <label for="skill">Hero Skill from 1 to 100:  </label>
        <input type="number" name="skill" id="skill" required value="{{ $hero->skill }}">

        <label for="bio">Bio: </label>
        <textarea name="bio" id="bio" cols="30" rows="10" required>{{ $hero->bio }}</textarea>

        <label for="universe_id">Universe: </label>
        <select name="universe_id" id="universe_id">
            <option value="" selected>{{ $hero->universe_id }}</option>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $universe->id == old('universe_id') ? 'selected': ''}}>{{ $universe->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn"> Update Hero </button>

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
