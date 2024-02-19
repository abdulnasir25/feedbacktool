<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::with('user', 'replies')->paginate(50);
        $users = User::where('id', '!=', Auth::id())->pluck('name');

        return view('home', compact('feedbacks', 'users'));
    }

    public function storeResponse(Request $request)
    {
        $request->validate([
            'responseText' => 'required|string',
        ]);

        $response = new Reply();
        $response->feedback_id = $request->feedbackId;
        $response->response = $request->responseText;

        $response->user_id = Auth::id();

        $response->parent_reply_id = $request->parentReplyId;

        // Save the response
        if ($response->save()) {
            return response()->json(['response' => $response, 'userName' => auth()->user()->name, 'success' => true], 200);
        }

        return response()->json(['success' => false], 200);
    }
}
