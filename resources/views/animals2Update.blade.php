<html>
<head>
    <title> Animals </title>
</head>
<body style="background-color: darkgray">
<h1>UPDATE my ANIMAL</h1>
{{--handles a new input--}}
<form action="/animals/{{$animal->id}}" method="Post" >
    {{method_field('PATCH')}}
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
    <button type="submit" > Update Animal id: {{$animal->id}}</button>
</form>
</body>
</html>
