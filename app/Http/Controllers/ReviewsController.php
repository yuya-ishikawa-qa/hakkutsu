<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Review;
use App\Store;
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
        return view('reviews.create');
    }

    public function store(Request $request)
    {

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

    public function destroy($review_id)
    {
        $review = Review::findOrFail($review_id);
        $review->delete();

        return redirect()->route('reviews.index');
    }
}
