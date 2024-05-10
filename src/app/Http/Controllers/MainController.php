<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Categiries;
use App\Models\Categories;
use Illuminate\Validation\Rules\Can;

class MainController extends Controller
{
    public function main() 
    {
        $categories = Categories::all();

        return view('WelcomePage', [
            'categories' => $categories,
            'title' => 'Главная страница'
        ]);
    }
}
