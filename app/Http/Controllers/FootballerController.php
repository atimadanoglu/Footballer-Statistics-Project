<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footballer;
use Illuminate\Support\Str;

class FootballerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $footballers = Footballer::all();
        return view("footballers.index", compact("footballers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view("footballers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     *
     */
    public function store()
    {
        $this->validateFootballer();

        $footballer = new Footballer();
        $this->takingAndSavingInputsToDB($footballer);

        return redirect()->route("footballers.index");

    }

    /**
     * Display the specified resource.
     *
     * @param Footballer $footballer
     *
     */
    public function show(Footballer $footballer)
    {
        return view("footballers.show", ["footballer" => $footballer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Footballer $footballer
     *
     */
    public function edit(Footballer $footballer)
    {
        return view("footballers.update", compact("footballer"));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @param  Footballer $footballer
     *
     */
    public function update(Footballer $footballer)
    {
        $this->validateFootballer();

        $this->takingAndSavingInputsToDB($footballer);

        return redirect()->route("footballers.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Footballer $footballer
     *
     */
    public function destroy(Footballer $footballer)
    {
         $footballer->delete();
         return redirect()->route("footballers.index");
    }

    protected function validateFootballer(): array
    {
        return request()->validate([
            "name" => "required|min:3|max:255",
            "clubName" => "required|max:255",
            "age" => "required|numeric",
            "matchCount" => "required|numeric",
            "goalCount" => "required|numeric",
            "assistCount" => "required|numeric",
            "slug" => "unique.footballers,slug",
        ]);
    }

    protected function takingAndSavingInputsToDB(Footballer $footballer)
    {
        $footballer->name = request()->input("name");
        $footballer->clubName = request()->input("clubName");
        $footballer->age = request()->input("age");
        $footballer->matchCount = request()->input("matchCount");
        $footballer->goalCount = request()->input("goalCount");
        $footballer->assistCount = request()->input("assistCount");
        $footballer->slug = Str::slug($footballer->name);
        $footballer->save();
    }
}
