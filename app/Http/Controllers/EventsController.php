<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use App\Models\Event;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');
        $events = Event::with('translations')
            ->where('status',true)
            ->orderBy('sort_id', 'desc')
            ->get()
            ->translate($locale, $fallbackLocale);
        $page = Page::with(['translations'])
            ->where(['type' => 'event', 'status' => Page::STATUS_ACTIVE])
            ->firstOrFail();
        $page = $page->translate($locale, $fallbackLocale);
        return view('pages.event.index', compact('events', 'page'));
    }

    public function show($article)
    {
        $locale = session()->get('locale');
        $fallbackLocale = config('voyager.multilingual.default');

        if (strpos(url()->current(), $article) !== false) {
            $event = Event::with('translations')
                ->where('slug', $article)
                ->where('status',true)
                ->firstOrFail();
            $event = $event->translate($locale,$fallbackLocale);

            $events = Event::with('translations')
                ->where('id', '!=', $event->id)
                ->where('status',true)
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get()
                ->translate($locale, $fallbackLocale);

        } else {
            abort(404);
        }

        $page = Page::with(['translations'])
            ->where(['type' => 'event'])
            ->firstOrFail();
        $page = $page->translate($locale, $fallbackLocale);

        return view('pages.event.show', compact('event', 'events', 'page'));
    }
}
