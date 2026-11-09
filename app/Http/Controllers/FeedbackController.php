<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function show($id) {
        $feedback = Feedback::find($id);
        return $feedback;
        // return $id;
        // return view('show', [
        //     "name" => "Diāna",
        //     "feedback" => "Forša lapa"
        // ]);
    }
}
