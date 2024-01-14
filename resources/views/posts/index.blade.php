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
        <h1>Blog</h1>
        <ul>
            @foreach ($posts as $post)
            <div class="content">
                <h2>{{ $post->title }}</h2>
                <p>{!! $post->body !!}</p>
                <p class="date">投稿日時:{!! $post->created_at !!}</p>
                <div class="comment-container">
                  <h3>コメント</h3>
                  @foreach ($comments as $comment)
                    @if($post["id"] == $comment["post_id"])
                    <div class="comment">
                      <div class="comment-img">
                        <img src="../images/usericon.svg" class="user-img">
                      </div>
                      <div class="comment-text">
                        <h4 class="nickname">{!! $comment->nickname !!}さん</h4>
                        <p class="comment-content">{!! $comment->comment !!}</p>
                        <p class="date">コメント日時:{!! $comment->created_at !!}</p>
                      </div>
                    </div>
                    @endif
                  @endforeach
                </div>
                <form action="/posts/comment" method="post" enctype="multipart/form-data">
                  @csrf
                  <?php
                    $post_id = $post["id"];
                  ?>
                  <input type="hidden" value=<?php echo $post_id ?> name="post_id">
                  <div class="Form-Item">
                    <p class="Form-Item-Label isMsg">
                      <span class="Form-Item-Label-Required">必須</span>お名前(最大10文字)
                    </p>
                    <input type="text" class="Form-Item-Input" name="nickname" id="nickname" value="{{ old('nickname'); }}">
                  </div>
                  
                  <div class="Form-Item">
                    <p class="Form-Item-Label isMsg">
                      <span class="Form-Item-Label-Required">必須</span>コメント内容(最大200文字)
                    </p>
                    <textarea name="comment" class="Form-Item-Textarea" id="comment" value="{{ old('comment'); }}"></textarea>
                  </div>
                  <div class="Form-Button">
                    <input type="submit" value="送信する" class="button">
                  </div>
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