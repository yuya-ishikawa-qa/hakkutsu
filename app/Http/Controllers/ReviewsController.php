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

    public function create(Request $request)
    {
        $data = $request->item_id;
        $item = Item::where('id', '=', $data)->select('item_name')->first();
        $user = \Auth::user();

        return view('reviews.create')->with([
            'data' => $data,
            'item' => $item,
            'user' => $user,
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

        return redirect('reviews')->with([
            'flash_message' => '送信しました',
        ]);
    }

    public function show(Request $request, $id)
    {
        $review = Review::with('item', 'user')->find($id);
        $item = Item::where('id', '=', $id)->select('item_name')->first();
        $randomItemInformation = Item::select('image_path')->inRandomOrder()->take(4)->get();
        $user = \Auth::user();

        return view('reviews.show')->with([
            'review' => $review,
            'item' => $item,
            'randomItemInformation' => $randomItemInformation,
            'user' => $user,
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

        return redirect('reviews');
    }
}
