<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Universe;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $dataHeroes = Hero::with('universe')->orderBy('created_at', 'desc')->paginate(10);

        return view('heroes.index', ['dataHeroes' => $dataHeroes]);
    }

    public function show($id)
    {
        $hero = Hero::with('universe')->findOrFail($id);

        return view('heroes.show', ['hero' => $hero]);
    }

    public function create()
    {
        $universes = Universe::all();

        return view('heroes.create', ['universes' => $universes]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
           'name' => 'required|string|max:255',
           'skill' => 'required|integer|min:0|max:100',
           'bio' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id'
        ]);

        Hero::create($validated);

        return redirect()->route('heroes.index')->with('success', 'Hero successfully added!');
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        $universes = Universe::all();

        return view('heroes.edit', ['hero' => $hero, 'universes' => $universes]);
    }

    public function update(Request $request, $id)
    {
        $hero = Hero::find($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id'
        ]);

        $hero->update($validated);

        return redirect()->route('heroes.index')->with('success', 'Hero Updated');
    }

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();

        return redirect()->route('heroes.index')->with('success', 'Hero deleted');
    }
}
