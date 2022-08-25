<html>
<head>
    <link rel="stylesheet" href="blog.css">
</head>
<body>


<article>
    <h1> <a href="/post/{{ $post->id }}">
            {{$post->title}}
        </a></h1>
    <p>
        Excerpt:  {{$post->excerpt}}
    <div>
        {{$post->body}}
    </div>
    </p>
</article>
<a href="/posts"> Go Back</a>

</body>
</html>
