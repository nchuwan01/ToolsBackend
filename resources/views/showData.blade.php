<!doctype html>
<html>
<link>
<link rel="stylesheet" href="bikes.css"/>
</head>
<body>
<table  border="1px">
    <tr>
        <th class="col"> ID </th> <th class="col"> Date </th>
        <th  class="col"> Time </th> <th class="col"> Customer Name </th><th class="col"> Sold </th>
        <th class="col"> item </th><th class="col"> price </th>
        <th>{{$s}}</th>

    </tr>

    @if($s == "3")
        <h1>3!</h1>
    @endif

</table>
</body>

</html>
