<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    // 投稿一覧表示
    public function index()
    {
        $posts = Post::latest() -> paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    // 投稿作成フォーム表示
    public function create()
    {
        return view('posts.create');
    }

    // 投稿保存
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Tokyo');
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|integer',
            'is_published' => 'sometimes|boolean'
        ]);

        if ($request->hasFile('main_image')) {
            $validatedData['main_image'] = $request->file('main_image')->store('images');
        }

        Post::create($validatedData);

        return redirect()->route('posts.index');
    }

    // 投稿詳細表示
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // 投稿編集フォーム表示
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // 投稿更新
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|integer',
            'is_published' => 'sometimes|boolean'
        ]);

        if ($request->hasFile('main_image')) {
            $validatedData['main_image'] = $request->file('main_image')->store('images');
        }

        $post->update($validatedData);

        return redirect()->route('posts.show', $post);
    }

    // 投稿削除
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

   // アップロード
    public function upload(Request $request)
    {
        $request->validate([
            // 例: 最大2MBの画像ファイルのみ許可
            'file' => 'required|image|max:2048',
        ]);

        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('uploads', 'public');

        return response()->json(['location' => "/storage/$path"]);
    }
}