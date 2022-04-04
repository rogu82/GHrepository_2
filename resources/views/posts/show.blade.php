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
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
          @csrf
          @method('DELETE')
          <button type="button">delete</button> 
        </form>
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">[back]</a>
        </div>
        <script>
            let form_delete = document.getElementById('form_delete');
 
            form_delete.addEventListener('click', function() {
  
            if(confirm("削除すると復元できません。 \n 本当に削除しますか？")){
               form_delete.submit();  
              }
             });
        </script>
    </body>
</html>