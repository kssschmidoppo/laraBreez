<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;



class MessageController extends Controller
{
    public function showAll() {

        $messages = Message::all();
    
        return view('posts', ['messages' => $messages]); 
    }
    
    public function create(Request $request) {
        $message = new Message(); 
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save(); 
    
        return redirect('/posts');         
    }
    
    
    public function view($id) {
    
        $message = Message::findOrFail($id); 
    
        return view('messageDetails', ['message' => $message]); 
    }
    
    public function delete($id) {

         $result = Message::findOrFail($id)->delete(); 
         return redirect('/posts'); 
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $messages = Message::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('/posts', compact('messages'));
    }
}
