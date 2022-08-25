<html>
<head>
    <link href="blog.css" rel="stylesheet" />
</head>
<body>

    @foreach( $customer as $customer )
        <tr class="oddTD">
            <td > {{$customer->id}} </td>
            <td> {{$customer->name}} </td>
            <td> {{$customer->address}} </td>
            <td> {{$customer->company}} </td>
            <td>
                <form  action="/product/{{$customer->id}}" method="POST" />
                @method("DELETE")
                @csrf
                <button type="submit" id="deleteBut" > Delete {{$customer->id}}</button>
                </form>
            </td>
            <td>
                <form  action="/customers/{{$customer->id}}/edit" method="get"/>
                @csrf
                <button type="submit" id="updateBut"> Update: {{$customer->id}}</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

</body>

</html>
