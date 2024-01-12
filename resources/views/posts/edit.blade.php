{{-- 投稿編集フォーム --}}

@extends('layouts.app')

@section('content')
  <h1>投稿編集</h1>
  <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
      <label for="title">タイトル:</label>
      <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
      @error('title')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
    <div>
      <label for="body">本文:</label>
      <textarea name="body" id="tinymce">{{ old('body', $post->body) }}</textarea>
      @error('body')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
    <div>
      <label for="category_id">カテゴリーID:</label>
      <input type="number" name="category_id" id="category_id" value="{{ old('category_id', $post->category_id) }}">
      @error('category_id')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
    <div>
      <label for="is_published">公開:</label>
      <input type="checkbox" name="is_published" id="is_published" value="1"
        {{ old('is_published', $post->is_published) ? 'checked' : '' }}>
    </div>
    <div>
      <button type="submit">更新</button>
    </div>
  </form>
  <a href="{{ route('posts.index') }}">一覧に戻る</a>
@endsection