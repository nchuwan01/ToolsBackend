<!doctype html>
<html>
<link>
<link rel="stylesheet" href="bikes.css"/>
<script src='myBikes.js'></script>
</head>
<body>

    <h2>Welcome to the capacity planner</h2>
    <h2> The total size {{$row}} col {{$col}} size {{$mySize}}</h2>
    <h2> The total size {{$row}} col {{$col}} size {{$mySize}}</h2>
    @if($row > 500)
    {
        wow lots of rows
    }
    @else{
        not so much
    }
    @endif

</body>

</html>


