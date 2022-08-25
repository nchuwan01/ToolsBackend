<html>
<head>
    <title> My Animal Farm</title>
</head>
<body style="background-color: #718096">
<h2> Update My Animal {{$animal->id}}  </h2>
@if ( $errors->any() )
    <ol>
        @foreach( $errors->all() as $error)
            <li style="color:red"> {{$error}} </li>
        @endforeach
    </ol>
@endif
<form action="/creatures/{{$animal->id}}" method="Post" >
    {{method_field('PUT')}}
    @csrf
    <br /><label for="animal"> Animal </label>
    <input type="text" name="name" placeholder="Animal Name"
           value="{{$animal->name}}"/>
    <br /><label for="sound"> Sound </label>
    <input type="text" name="sound" placeholder="Animal Sound"
           value="{{$animal->sound}}"/>
    <br /><label for="count"> Count </label>
    <input type="text" name="count" placeholder="Animal Ct"
           value="{{$animal->count}}" />
    <br />
    <select name="category">
        @foreach($categories as $cat)
            @if ( $cat->id == $animal->category_id)
                <option value="{{$cat->id}}" selected> {{$cat->name}}</option>
            @else
                <option value="{{$cat->id}}"> {{$cat->name}}</option>
            @endif
        @endforeach
    </select>
    <button type="submit" > Update Animal id:{{$animal->id}}  </button>
</form>
</body>
</html>
