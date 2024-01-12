<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>管理者ログイン</title>
        <link rel='stylesheet' href='../css/login.css'>
    </head>

    <body>
        <header>
            <nav>
                <a href="/">&#x21A9;</a>
            </nav>
        </header>
        <div class="title-container">
        <h1 class="title">管理者ログイン</h1>
        </div>
        <div class="login">
            <form action="/admin/login" method="POST">
                @csrf
                <div class="text-input">
                    <label for="username">ユーザー</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('eamil') }}" required>
                    <span class="separator"> </span>
                </div>   

                <div class="text-input">
                    <label for="password">パスワード</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" pattern="^[0-9A-Za-z]+$" value="{{ old('password') }}" required>
                    <span class="separator"> </span>
                </div>  

                <div>
                    @if (isset($error_message))
                        <div id="error_explanation" class="text-danger">
                            <ul>
                            <li style="color:red">{{ $error_message }} </li>
                            </ul>
                        </div>
                    @endif
                    @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:red">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="form-bottom">
                    <input type="submit" id="submit" value="ログイン">
                </div>
            </form>
    </body>
</html>
