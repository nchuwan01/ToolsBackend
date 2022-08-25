<html>
<head>
    <title></title>

</head>
<body style="background-color: green">
<h2> HI, HOw are you?</h2>
{{--
<h2>My Zoo Animals</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Animal</th>
        <th>Sound</th>
        <th>Count</th>

    </tr>
    @foreach($animals as $animal)
        <tr>
            <td>{{$animal->id}}</td>
            <td>{{$animal->name}}</td>
            <td>{{$animal->sound}}</td>
            <td>{{$animal->count}}</td>
            <td>
                <form action="animals/{{$animal->id}}" method="post">
                    @method('DELETE')
                    @csrf
                        <button type="submit">
                            Delete{{$animal->id}}
                        </button>
                </form>
            </td>
          --}}{{--  <td>
                --}}{{----}}{{--<form action="animals/{{$animal->id}}" method="post">
                    @method('PUT')
                    @csrf
                    <button type="submit">
                        Update{{$animal->id}}
                    </button>
                </form>--}}{{----}}{{--
            </td>--}}{{--

        </tr>




    @endforeach

</table>
<h2>Create a new Animal</h2>
    @if ( $errors->any() )
        <ol>
            @foreach( $errors->all() as $error)
                <li style="color:red"> {{$error}} </li>
            @endforeach
        </ol>
    @endif
<form action="/animals" method="Post" >
    @csrf
    <br /><label for="animal"> Animal </label>
    <input type="text" name="name" placeholder="Animal Name"/>
    <br /><label for="sound"> Sound </label>
    <input type="text" name="sound" placeholder="Animal Sound"/>
    <br /><label for="count"> Count </label>
    <input type="text" name="count" placeholder="Animal Ct"/>
    <button type="submit" > New Animal </button>
</form>--}}

</body>

</html>
