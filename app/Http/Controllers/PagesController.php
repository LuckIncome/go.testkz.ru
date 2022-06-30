<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\About;
use App\Models\Article;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Title;
use App\Models\Mailing;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function getPage($slug = 'home')
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');

        if (strpos(url()->current(), 'home') !== false) {            
            abort(404);
        } else {
            $page = Page::select('type', 'id', 'title', 'excerpt', 'body', 'image', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'status')
                ->where(['slug' => $slug, 'status' => Page::STATUS_ACTIVE])
                ->firstOrFail();
        }
        $page = $page->translate($locale, $fallbackLocale);

        switch ($page->type) {
            case 'home':
                $hide = Mailing::where('pages', 'home')->first();
                $title = Title::with('translations')->first();
                $title = $title->translate($locale, $fallbackLocale);

                $articles = Article::with('translations')
                    ->where('status', true)
                    ->orderBy('created_at', 'desc')
                    ->get()
                    ->translate($locale, $fallbackLocale);

                $partners = Partner::with('translations')
                    ->orderBy('created_at', 'desc')
                    ->get()
                    ->translate($locale, $fallbackLocale);

                $events = Event::with('translations')
                    ->where('status', true)
                    ->orderBy('created_at', 'desc')
                    ->take(2)
                    ->get()
                    ->translate($locale, $fallbackLocale);

                return view('pages.' . $page->type, compact(
                    'page',
                    'articles',
                    'partners',
                    'events',
                    'title',
                    'hide'
                ));
                break;
            case 'about':
                $aboutus = About::with('translations')
                        ->select('title', 'content', 'excerpt', 'image')
                        ->firstOrFail()
                        ->translate($locale, $fallbackLocale);                
                return view('pages.' . $page->type, compact('page', 'aboutus'));
                break;
            case 'contacts':
                $hide = Mailing::where('pages', 'contacts')->first();
                return view('pages.' . $page->type, compact('page', 'hide'));
                break;    
            case 'simple':
                return view('pages.' . $page->type, compact('page'));
                break;
            default :
                return view('pages.' . $page->type, compact('page'));
                break;
        }
    }

    public function setLocale($locale)
    {
        if (in_array($locale, config()->get('voyager.multilingual.locales'))) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
