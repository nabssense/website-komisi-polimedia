<?php

namespace App\Http\Controllers\ForumDiscussions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumDiscussionsController extends Controller
{
    //
    public function index()
    {
        return view('pages.forum-diskusi.forum-diskusi', [
            "title" => "Website Komisi | Forum Diskusi",
            "active" => "Forum Diskusi",
        ]);
    }

    public function askQuestions()
    {
        return view('pages.forum-diskusi.forum-diskusi-ajukan-pertanyaan', [
            "title" => "Website Komisi | Ajukan Pertanyaan",
            "active" => "Ajukan Pertanyaan",
        ]);
    }
}
