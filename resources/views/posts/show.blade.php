{{-- 投稿詳細表示 --}}

@extends('layouts.app')

@section('content')
  <h1>{{ $post->title }}</h1>
  <p>{!! $post->body !!}</p>
  <a href="{{ route('posts.index') }}">一覧に戻る</a>
@endsection