<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;

class SearchController extends Controller
{
    //

    public function index()
    {


        return view("search"); // view pro hledani, formular
    }

    public function search(Request $request)
    {
        $firstName = $request->input("firstName");
        $lastName = $request->input("lastName");
        $petName = $request->input("pet_name");
        $owners = Owner::where("first_name", "LIKE", "%" . $firstName . "%")
            ->where("surname", "LIKE", "%" . $lastName . "%")
            ->get();
        $animals = Animal::get();






        return view("search", ["owners" => $owners, "animals" => $animals]);
    }
}
