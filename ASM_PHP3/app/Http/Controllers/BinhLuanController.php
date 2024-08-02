<?php

namespace App\Http\Controllers;

use App\Models\BinhLuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BinhLuanController extends Controller
{
    public function store(Request $request, $productId)
    {
        

        $comment = new BinhLuan();
        $comment->user_id = Auth::id();
        $comment->san_pham_id = $productId;
        $comment->noi_dung = $request->noi_dung;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
