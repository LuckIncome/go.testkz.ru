<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Article;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');

        $articles = Article::with('translations')
            ->where('status',true)
            ->orderBy('sort_id', 'desc')
            ->get()
            ->translate($locale, $fallbackLocale);

        $page = Page::with(['translations'])
            ->where(['type' => 'news', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        $page = $page->translate($locale, $fallbackLocale);
        return view('pages.news.index', compact('articles', 'page'));
    }

    public function show($article)
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');

        if (strpos(url()->current(), $article) !== false) {
            $article = Article::with('translations')
                ->where('slug', $article)
                ->where('status',true)
                ->firstOrFail();
            $article = $article->translate($locale,$fallbackLocale);       

            $articles = Article::with('translations')   
                ->where('id', '!=', $article->id)         
                ->where('status',true)
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get()
                ->translate($locale, $fallbackLocale);
            
        } else {
            abort(404);
        }

        $page = Page::with(['translations'])
            ->where(['type' => 'news'])
            ->firstOrFail();
        $page = $page->translate($locale, $fallbackLocale);
        return view('pages.news.show', compact('article', 'articles', 'page'));
    }
}
