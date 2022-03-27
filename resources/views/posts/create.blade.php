<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
            <form action="/posts" method="POST">
                @csrf
                <div class="title">
                  <h2>Title</h2>
                  <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}" />
                  <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="body">
                  <h2>Body</h2>
                  <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。" value="{{ old('post.body') }}"></textarea>
                  <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
            </div>
                <input type="submit" value="保存" />
            </form>
            <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>