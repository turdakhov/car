<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $car = Car::first();

        $category = $car->category;

        // dd($category);


        $category = Category::first();

        // dd($category->cars);

        $cars = $category->cars;


        dd($category->active_cars);
        // $filteredCars = $category->cars()->where('is_active', 1)->get();
        // $ = $category->cars;



        return view('home', compact('car'));
    }
}
