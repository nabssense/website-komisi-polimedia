<?php

namespace App\Http\Controllers\Home;

use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Models\CategoryDiscussion;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $discussions = Discussion::with('user', 'category');
        return view('pages.beranda', [
            "title" => "Website Komisi | Beranda",
            "active" => "Beranda",
            
            
            'discussions' => $discussions->orderBy('created_at', 'desc')->paginate(3)->withQueryString(),
            'categories' => CategoryDiscussion::all(),
        ]);
        
    }
    
}
