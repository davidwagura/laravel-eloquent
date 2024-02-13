<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();

        return view ('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car->name = $request->name;
        $car->founded = $request->founded;
        $car->description = $request->description;
        $car->brand_id = $request->brand_id;
        $car->save();


        return redirect(route("cars.index"));

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        $brands = $car->brand();

        return view('index', ['brands' => $brands]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars->delete();
    
        return redirect(route('cars.index'));
    }
}
