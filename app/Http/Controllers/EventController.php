<?php

namespace App\Http\Controllers;

use App\Models\{Event, Tag};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create, store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with(['user', 'tags'])->where('starts_at', '>=', now())->orderBy('starts_at', 'asc')->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 4242424242424242      numero carte visa for test
        // 5555555555554444      numero carte Mastercard for test
        // 6200000000000005      numero carte UnionPay for test
        //dd($request->all());
        $user = Auth::user();
        $amount = 1000;

        $stripeCharge = $user->charge(
            $amount, $request->payment_method
        );

        if($request->filled('premium')) $amount +=500;

        $event = $user->events()->create([
            "title" => $request->title,
            "slug" => Str::slug($request->title),
            "content" => $request->content,
            "premium" => $request->filled('premium'),
            "starts_at" => $request->starts_at,
            "ends_at" => $request->ends_at
        ]);

        $tags = explode(',', $request->tags);

        foreach ($tags as $tag) {
            $tag = trim($tag);

            $tag_create = Tag::firstOrCreate(
                [
                    "slug" => Str::slug($tag),
                ],
                [
                    'name' => $tag
                ]
            );

            $event->tags()->attach($tag_create->id);
        }

        // Alert::success('Events', 'Evenement créer avec success');

        return redirect()->route('events.index')->with('toast_success', 'Evenement créer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
