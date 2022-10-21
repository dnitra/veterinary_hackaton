<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function animalDetail($id)
    {
        $animal = Animal::find($id);
        return view('pet_detail', compact('animal'));
    }

    public function edit()
    {
    }

    public function update($id, Request $request)
    {

        $this->validate($request, [
            'name' => 'required',

        ], [
            'name.required' => 'Please input a valid name',

        ]);

        $animal = Animal::findOrFail($id);
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        $animal->save();

        session()->flash('success_message', 'Information edited successfully!');

        return redirect()->route('animal.detail', $animal->id);
    }

    public function delete($id, Request $request)
    {

        $animal = Animal::findOrFail($id);
        $animal->delete();

        session()->flash('success_message', 'Removed successfully!');

        return redirect('/');
    }
}
