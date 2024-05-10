<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionViewController extends Controller
{
    public function getquestion (Request $request, string $catgory_name, string $id) 
    {
        $question = Questions::find($id);

        return view('QuestionView', [
            'question' => $question,
            'title' => 'Вопрост из раздела: '.$catgory_name
        ]);
    }
}
