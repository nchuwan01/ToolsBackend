<html>
<head>

</head>
<body>

<h2>Review 1</h2>
<ol>
    @foreach($myList as $item)
        @if($item>33)
            <li>{{$item}}</li>


        @endif
    @endforeach
    @for($i=0; $i<10; $i++)
       <br/> {{$i}} bottles on the wall
    @endfor
</ol>

</body>

</html>
