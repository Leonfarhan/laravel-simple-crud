<x-layout>
    <form action="{{ route('heroes.store') }}" method="POST">
        @csrf
        @method('POST')

        <h2>Add Heroes</h2>

        <label for="name">Hero Name: </label>
        <input type="text" name="name" id="name" required value="{{ old('name') }}">

        <label for="skill">Hero Skill from 1 to 10:  </label>
        <input type="number" name="skill" id="skill" required value="{{ old('skill') }}">

        <label for="bio">Bio: </label>
        <textarea name="bio" id="bio" cols="30" rows="10" required>{{ old('bio') }}</textarea>

        <label for="universe_id">Universe: </label>
        <select name="universe_id" id="universe_id">
            <option value="" disabled selected>Select a universe</option>
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $universe->id == old('universe_id') ? 'selected': ''}}>{{ $universe->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn"> Add Hero </button>

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
