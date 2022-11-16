<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|max:100',
            'Brand' => 'required|max:50',
            'Class' => 'required|max:50',
            'Horsepower' => 'required|max:50',
            'Weight' => 'required|max:50',
            'Driver' => 'required|max:50',
            'LastMaintenance' => 'required|date',
        ]);
        Car::create($request->only(['Name', 'Brand', 'Class', 'Horsepower', 'Weight', 'Driver', 'LastMaintenance']));
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Name' => 'required|max:100',
            'Brand' => 'required|max:50',
            'Class' => 'required|max:50',
            'Horsepower' => 'required|max:50',
            'Weight' => 'required|max:50',
            'Driver' => 'required|max:50',
            'LastMaintenance' => 'date',
        ]);
        Car::find($id)->update($request->only(['Name', 'Brand', 'Class', 'Horsepower', 'Weight', 'Driver', 'LastMaintenance']));
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return redirect()->route('cars.index');
    }
}
