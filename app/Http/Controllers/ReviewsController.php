<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->paginate(5);
        return view('reviews.index',['reviews' => $reviews]);
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:140',
            ]);

        Review::create($params);

        return redirect()->route('reviews.index');
    }

    public function show($review_id)
    {
        $review = Review::findOrFail($review_id);
        return view('reviews.show', ['review' => $review]);
    }

    public function edit($review_id)
    {
        $review = Review::findOrFail($review_id);
        return view('reviews.edit', ['review' => $review]);
    }

    public function update($review_id, Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:140',
            ]);

        $review = Review::findOrFail($review_id);
        $review->fill($params)->save();

        return redirect()->route('reviews.index');
    }

    public function destroy($review_id)
    {
        $review = Review::findOrFail($review_id);
        $review->delete();

        return redirect()->route('reviews.index');
    }
}
