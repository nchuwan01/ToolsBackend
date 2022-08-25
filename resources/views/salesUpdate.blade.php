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
<body style="background-color: #174c9a">
<h2 style="color: #ec006d; font-size: 20px"> Update My Sales {{$sales->id}}  </h2>
@if ( $errors->any() )
    <ol>
        @foreach( $errors->all() as $error)
            <li style="color:red"> {{$error}} </li>
        @endforeach
    </ol>
@endif
<form action="/sales/{{$sales->id}}" method="Post" >
    {{method_field('PUT')}}
    @csrf
    <br /><label for="id"> ID </label>:<br />
    <input style="background-color: #5cc1e7" type="number"  name="id" placeholder="sales id" value="{{$sales->id}}"/>
    <span style="color:red"> @error('id'){{$message}} @enderror</span>
    <br /><label for="date"> Date </label>:<br />
    <input type="text"  name="date" placeholder="date" value="{{$sales->date}}" />
    <span style="color:red"> @error('date'){{$message}} @enderror</span>
    <br /><label for="time">  Time </label>:<br />
    <input type="text"  name="time" placeholder="time" value="{{$sales->time}}"/>
    <br /> Customer:<br />
    <select name="customer_id">
        @foreach($customers as $customer)
            @if($sales->customer_id == $customer->id)
                <option selected={{$customer->name}} value="{{$customer->id}}"> {{$customer->name}}</option>
            @endif
                <option value="{{$customer->id}}"> {{$customer->name}}</option>

        @endforeach
    </select>
    <br /><label for="sold"> Sold </label>:<br />
    <input type="number"  name="sold" placeholder="sold" value="{{$sales->sold}}" />
    <span style="color:red"> @error('sold'){{$message}} @enderror</span>
    <br /><label for="item">  item </label>:<br />
    <input type="text"  name="item" placeholder="item" value="{{$sales->item}}"/>
    <span style="color:red"> @error('item'){{$message}} @enderror</span>
    <br /><label for="price">  price </label>:<br />
    <input type="text"  name="price" placeholder="price" value="{{$sales->price}}" />
    <span style="color:red"> @error('price'){{$message}} @enderror</span><br />
    <button type="submit" id="updateBut" > Update Animal id:{{$sales->id}}  </button>
</form>
</body>
</html>
