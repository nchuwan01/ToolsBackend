<html>
<head>
    <link href="blog.css" rel="stylesheet" />
</head>
<span></span>
<h2> My Zoo </h2>
<table border="1">
    <tr>
         <th> ID </th> <th> Animal </th>
         <th> Eats </th> <th> Ct </th><th> Category </th>
    </tr>
    @foreach( $animals as $animal )
        <tr>
            <td> {{$animal->id}} </td>
            <td> {{$animal->name}} </td>
            <td> {{$animal->sound}} </td>
            <td> {{$animal->count}} </td>
            <td> {{$animal->Category->name}} </td>
            <td>
                <form  action="/creatures/{{$animal->id}}" method="POST" />
                @method("DELETE")
                @csrf
                 <button type="submit" > Delete {{$animal->id}}</button>
                </form>
            </td>
            <td>
                <form  action="/creatures/{{$animal->id}}/edit" method="get"/>
                @csrf
                 <button type="submit" > Update: {{$animal->id}}</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
    <h1> Create new Animal!!!</h1>
    @if ( $errors->any() )
        <ol>
        @foreach( $errors->all() as $error)
                <li style="color:red"> {{$error}} </li>
            @endforeach
        </ol>
    @endif
    <form  action="/creatures" method="POST" />
      @csrf
        <br /><label for="name"> Animal </label>:
               <input type="text"  name="name" placeholder="Animal Name" />
                <span style="color:red"> @error('name'){{$message}} @enderror</span>
        <br /><label for="sound"> Sound </label>:
                <input type="text"  name="sound" placeholder="Animal Sound" />
                <span style="color:red"> @error('sound'){{$message}} @enderror</span>
        <br /><label for="count">  Count </label>:
        <input type="text"  name="count" placeholder="Animal Count" />
        <br /> Category:
            <select name="category">
               @foreach( $categories as $cat )
                    <option value="{{$cat->id}}"> {{$cat->name}}</option>
                @endforeach
           </select>
        <button type="submit" > Submit it </button>
    </form>

    </body>
</html>
