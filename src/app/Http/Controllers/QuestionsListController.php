<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;


class QuestionsListController extends Controller
{
    public function getlist(Request $request, string $category_name) 
    {

        $questions = Questions::where('category_name',  $category_name)->get();

        return view('Questionslist', [
            'category_name' => $category_name,
            'questions' => $questions,
            'title' => 'Раздел '.$category_name
        ]);
    }
}
