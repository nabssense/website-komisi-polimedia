<?php

namespace App\Http\Controllers\Auth;

use App\Models\News;
use App\Models\User;
use App\Models\Discussion;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use App\Models\PeriodFunding;
use Illuminate\Http\JsonResponse;
use App\Models\CategoryDiscussion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Auth\RegisterRequest;


class RegisterController extends Controller
{
    //
    public function index(Request $request)
    {

        $discussions = Discussion::with('user', 'category');
        $news = News::all();
        $activeNews = News::where('headline_status', 'Aktif')->get();
        $activePeriods = PeriodFunding::whereDate('start_date', '<=', now())
            ->whereDate('end_date', '>=', now())
            ->get();
        // Mengambil semua data berita
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

        if ($request->search) {
            $discussions->where('title', 'like', "%$request->search%")
                ->orWhere('question', 'like', "%$request->search%");
        }

        return view('pages.auth.daftar-akun', [
            "title" => "Website Komisi | Daftar",
            "active" => "Daftar Akun",

            'news' => $news,
            'discussionsTerbantu' => $discussionsTerbantu,
            'discussions' => $discussions->orderBy('created_at', 'desc')->paginate(10)->withQueryString(),
            'categoriesDiscussions' => CategoryDiscussion::all(),
            'categoriesNews' => CategoryNews::all(),
            'search' => $request->search,
            'firstImages' => $firstImages,
            'activeHeadlineNews' => $activeNews,
            'activePeriods' => $activePeriods
        ]);
    }
    public function register(RegisterRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $modifiedFullname = str_replace(' ', '%20', $validated['fullname']);
        $validated['profile_picture'] = config('app.avatar_generator_url') . $modifiedFullname;
        // Set default admin status to "Tidak Aktif"
        $validated['status'] = 'Tidak Aktif';

        $validated['admin'] = 'Tidak Aktif';

        $create = User::create($validated);

        if ($create) {
            Auth::login($create);
            return response()->json(['success' => true]);
        }

        return response()->json(['errors' => ['general' => 'Gagal membuat akun.']], 422);
    }
}
