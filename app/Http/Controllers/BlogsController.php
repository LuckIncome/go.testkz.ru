<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');

        $blogs = Blog::with('translations')
            ->where('status',true)
            ->orderBy('sort_id', 'desc')
            ->get()
            ->translate($locale, $fallbackLocale);
            
        $page = Page::with(['translations'])
            ->where(['type' => 'blog', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        $page = $page->translate($locale, $fallbackLocale);
        return view('pages.blog.index', compact('page', 'blogs'));
    }

    public function show($article)
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');

        if (strpos(url()->current(), $article) !== false) {
            $blog = Blog::with('translations')
                ->where('slug', $article)
                ->where('status',true)
                ->firstOrFail();
            $blog = $blog->translate($locale,$fallbackLocale);

            $blogs = Blog::with('translations')
                ->where('status',true)
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get()
                ->translate($locale, $fallbackLocale);
        } else {
            abort(404);
        }

        $page = Page::with(['translations'])
            ->where(['type' => 'blog'])
            ->firstOrFail();
        $page = $page->translate($locale, $fallbackLocale);

        return view('pages.blog.show', compact('blog', 'blogs', 'page'));
    }
}
