<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Review;
use App\Store;
use App\User;
use App\Item;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::with('item', 'user')->paginate(5);

        return view('reviews.index')->with([
            'reviews' => $reviews,
        ]);
    }

    public function create()
    {
        $q = \Request::query();
        $item = Item::where('item_id', '=', $q)->select('item_name');
        $user = \Auth::user();
        $reviews = $user->reviews();

        $data=[
            'user' => $user,
            'reviews' => $reviews,
            'q' => $q,
        ];
        // dd($data);

        return view('reviews.create')->with([
            'data' => $data,
            'item' => $item,
        ]);
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->user_id = auth()->id();
        $review->item_id = $request->input('item_id');
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->save();

        return redirect('reviews.index')->with([
            'flash_message' => '送信しました',
        ]);
    }

    public function show(Request $request, $id)
    {
        $review = Review::with('item', 'user')->find($id);
        $randomItemInformation = Item::select('image_path')->inRandomOrder()->take(4)->get();

        return view('reviews.show')->with([
            'review' => $review,
            'randomItemInformation' => $randomItemInformation,
        ]);
    }

    public function edit($review_id)
    {

    }

    public function update($review_id, Request $request)
    {

    }

    public function destroy($id)
    {
        $review = Review::find($id);

        if (\Auth::id() == $review->user_id) {
            $review->delete();
        }

        return back();
    }
}
