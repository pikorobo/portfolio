<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='../css/posts/index.css'>
    <title>Masay Morooka Portfolio</title>
  </head>

  <body>
    <header id="header">
        <nav class="menu">
            <ul id="g-navi">
                <li>
                    <a href="/">About</a>
                </li>
                <li>
                    <a href="/#skills">Skills</a>
                </li>
                <li>
                    <a href="/#works">Works</a>
                </li>
                <li>
                    <a href="/posts/index">Blog</a>
                </li>
                <li>
                  <a href="mailto:masaya.morooka0915@gmail.com" class="contact">
                    <img src="../images/mail.svg">
                    <p>Contact</p>
                  </a>
                </li>
            </ul>
        </nav>
    </header> 

    <div class="blog">
      <div class="blog-inner">
        @extends('layouts.app')
        <h1>Blog</h1>
        <ul>
            @foreach ($posts as $post)
            <div class="content">
                <h2>{{ $post->title }}</h2>
                <p>{!! $post->body !!}</p>
                <p class="date">投稿日時:{!! $post->created_at !!}</p>
                <div class="comments">
                  @foreach ($comments as $comment)
                    @if($post["id"] == $comment["post_id"])
                    <p>{!! $comment->nickname !!}</p>
                    <p>{!! $comment->comment !!}</p>
                    @endif
                  @endforeach
                </div>
                <form action="/posts/comment" method="post" enctype="multipart/form-data">
                  @csrf
                  <?php
                    $post_id = $post["id"];
                  ?>
                  <input type="hidden" value=<?php echo $post_id ?> name="post_id">
                  <input type="text" name="nickname" id="nickname" value="{{ old('nickname'); }}">
                  <input type="text" name="comment" id="comment" value="{{ old('comment'); }}">
                  <input type="submit">
                </form>
            </div>
            @endforeach
        </ul>  
        <div class="pagination">
            {{ $posts->links() }}
        </div>
      </div>
    </div>

    <footer id="footer">
      <p>Contact</p>
      <a href="mailto:masaya.morooka0915@gmail.com">masaya.morooka0915@gmail.com</a>
      <small> All Rights Reserved 2024 &copy; Masaya Morooka</small>  
    </footer>                    
  </body>
</html>