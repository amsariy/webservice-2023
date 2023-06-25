<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $comments = Komentar::all();
        return response()->json($comments);
    }

    public function show($id)
    {
        $comment = Komentar::findOrFail($id);
        return response()->json($comment);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
    
            'content' => 'required',
        ]);

        $comment = Komentar::create($request->all());
        return response()->json($comment, 201);
    }

    // public function update(Request $request, $id)
    // {
    //     $comment = Komentar::findOrFail($id);
    //     $comment->update($request->all());
    //     return response()->json($comment, 200);
    // }

    public function update(Request $request)
    {
        $comment = Komentar::findOrFail($request->id);
        $comment->update($request->all());
        return response()->json($comment, 200);
    }


    public function destroy($id)
    {
        Komentar::findOrFail($id)->delete();
        return response()->json('Deleted successfully', 200);
    }
}
