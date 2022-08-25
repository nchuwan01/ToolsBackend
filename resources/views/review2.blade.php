<html>
<head>

</head>
<body>

<h2>Review 2</h2>

    <table border="1">
        @foreach($myList as $key=> $value)
           <tr>
               <td>{{$key}}</td>
               <td>{{$value}}</td>

           </tr>
        @endforeach

    </table>



</body>

</html>
