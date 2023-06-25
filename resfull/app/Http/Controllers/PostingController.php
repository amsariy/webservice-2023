<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    {
        $postings = Posting::all();
        return response()->json($postings);
    }

    public function show($id)
    {
        $posting = Posting::findOrFail($id);
        return response()->json($posting);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'posting' => 'required',
        ]);

        $posting = Posting::create($request->all());
        return response()->json($posting, 201);
    }

    public function update(Request $request)
    {
        $posting = Posting::findOrFail($request->id);
        $posting->update($request->all());
        return response()->json($posting, 200);
    }

    public function destroy($id)
    {
        Posting::findOrFail($id)->delete();
        return response()->json('Deleted successfully', 200);
    }
}
