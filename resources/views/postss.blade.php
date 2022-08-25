<html>
<head>
    <link href="blog.css" rel="stylesheet" />
</head>
<body>
@foreach( $posts as $post )
<h2> <a href="post/{{$post->id}}"> My Blog Post Site </a></h2>
<article>
    <h1> {{$post->title}}</h1>
    <div>
        {{$post->summary}}
    </div>
</article>
@endforeach

</body>
</html>
