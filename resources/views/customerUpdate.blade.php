<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        input, select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 25px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
        #deleteBut, #updateBut, #submitBut{
            height: 35px;
            width: 110px;
            align-items: center;
            display: inline-block;
            background-color: #f32828;
            border-radius: 10px;
            border-style: none;
            box-shadow: rgba(26, 26, 26, 0.26) 0 1px 2px inset;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: flex;
            flex-direction: row;
            flex-shrink: 0;
            font-family: "RM Neue",sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
            padding: 10px 21px;
            text-align: center;
            text-transform: none;
            transition: color .13s ease-in-out,background .13s ease-in-out,opacity .13s ease-in-out,box-shadow .13s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }
        #updateBut{
            width: 205px;
            background-color: #e88117;

        }
    </style>
</head>
<body style="background-color: #718096">
<h2 style="color: #1b9bfd"> Update My customer {{$customer->id}}  </h2>
@if ( $errors->any() )
    <ol>
        @foreach( $errors->all() as $error)
            <li style="color:red"> {{$error}} </li>
        @endforeach
    </ol>
@endif
<form action="/customers/{{$customer->id}}" method="Post" >
    {{method_field('PUT')}}
    @csrf

    <br /><label for="id"> ID: </label><br/>
    <input type="text" name="id" placeholder="customer ID"
           value="{{$customer->id}}"/>
    <br /><label for="name"> Name </label>:<br/>
    <input type="text" name="name" placeholder="customer Name"
           value="{{$customer->name}}"/>
    <br /><label for="address"> Address </label>:<br/>
    <input type="text" name="address" placeholder="customer address"
           value="{{$customer->address}}" />
    <br />
    <label for="company"> Company </label>:<br/>
    <input type="text" name="company" placeholder="customer company"
           value="{{$customer->company}}" />
    <br />
    <button type="submit" id="updateBut"> Update customer id:{{$customer->id}}  </button>
</form>
</body>
</html>
