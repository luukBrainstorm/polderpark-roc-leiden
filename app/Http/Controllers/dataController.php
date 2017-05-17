<?php

namespace App\Http\Controllers;

use App\postModel;
use Illuminate\Http\Request;

class dataController extends Controller  {
    public function update(Request $request, $id) {
        $post = postModel::find($id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();

        return redirect('/?success=true');
    }

    public function insert(Request $request) {
        $post = new postModel();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect('/?success=true');
    }

    public function delete($id) {
        $post = postModel::find($id);
        $post->delete();
        return view('delete');
    }

    public function view(Request $request, $id) {
        $post = postModel::find($id);
        $uri = $request->getRequestUri();

        if($uri == "/post/$id") {
            return view('post', ['post' => $post]);
        } else {
            return view('edit', ['post' => $post]);
        }
    }

    public function viewAll() {
        $posts = postModel::all();

        return view('all', ['posts' => $posts]);
    }
}
