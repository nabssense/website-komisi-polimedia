<?php

namespace App\Http\Controllers\Home;

use App\Models\News;
use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Models\PeriodFunding;
use Illuminate\Support\Carbon;
use App\Models\CategoryDiscussion;
use App\Http\Controllers\Controller;
use App\Models\CategoryNews;

class HomeController extends Controller
{
    //
    public function index()
{
    $news = News::orderBy('created_at', 'desc')->get();
    $discussions = Discussion::with('user', 'category')->orderBy('created_at', 'desc');
    $activeNews = News::where('headline_status', 'Aktif')->get();
    $activePeriods = PeriodFunding::where('start_date', '<=', Carbon::now())
    ->where('end_date', '>=', Carbon::now())
    ->get();

    $firstImages = [];
    foreach ($news as $item) {
        $images = json_decode($item->image, true);
        if (!empty($images)) {
            $firstImages[$item->id] = $images[0];
        } else {
            $firstImages[$item->id] = null;
        }
    }
    
    $discussionsTerbantu = Discussion::with('user', 'category')
        ->withCount('likes')
        ->orderBy('likes_count', 'desc')
        ->paginate(5);

    return view('pages.beranda', [
        "title" => "Website Komisi | Beranda",
        "active" => "Beranda",
        'news' => $news,
        'discussionsTerbantu' => $discussionsTerbantu,
        'discussions' => $discussions->orderBy('created_at', 'desc')->paginate(3)->withQueryString(),
        'categoriesDiscussions' => CategoryDiscussion::all(),
        'categoriesNews' => CategoryNews::all(),
        'firstImages' => $firstImages,
        'activeHeadlineNews' => $activeNews,
        'activePeriods' => $activePeriods 
    ]);
}
    
}
