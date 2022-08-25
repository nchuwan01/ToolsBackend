<html>
<head>
    <link href="blog.css" rel="stylesheet" />
</head>
<body>
<div style="border-radius: 0; background-color: #3881b9; height: 100px">
    <img src="{{ asset('./images/s.jpeg')}}" height="100px" width="100px" alt="logo">
    <div id="allLinks" style="position: absolute" >
        <a className="navbar-brand"  href="http://localhost:3000/" style="padding-left: 50px" >Home</a>
        <a className="navbar-brand" href="http://localhost:3000/Inventory">Main Inventory</a>
        <a className="navbar-brand" href="http://127.0.0.1:8000/customers">Customer</a>
        <a className="navbar-brand" href="http://127.0.0.1:8000/sales">Sales</a>
        <a className="navbar-brand" href="http://127.0.0.1:8000/product">Sales Report</a>

    </div>
</div>

<table border="5" id="table" style="margin-left: 250px; margin-top: 20px" >
    <tr>
        <th class="col"> ID </th> <th class="col"> name </th>
        <th class="col"> Address </th> <th class="col"> Company </th>
        <th class="col"> Delete </th><th class="col"> Update </th>
    </tr>
    @foreach( $customer as $customer )
        <tr class="oddTD">
            <td > {{$customer->id}} </td>
            <td> {{$customer->name}} </td>
            <td> {{$customer->address}} </td>
            <td> {{$customer->company}} </td>
            <td>
                <form  action="/customers/{{$customer->id}}" method="POST" />
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
    @endforeach

</table>
    @if ( $errors->any() )
        <ol>
            @foreach( $errors->all() as $error)
                <li style="color:red"> {{$error}} </li>
            @endforeach
        </ol>
    @endif
    <form  action="/customers" method="POST" />
        <div style="margin-left: 400px; display: inline-block; margin-top: 20px">

            @csrf
            <br /><label for="id"> ID </label>:<br/>
            <input type="text"  name="id" placeholder="Customer ID" />
            <span style="color:red"> @error('id'){{$message}} @enderror</span>
            <br /><label for="name"> Name </label>:<br/>
            <input type="text"  name="name" placeholder="Customer Name" />
            <span style="color:red"> @error('name'){{$message}} @enderror</span>

            <br /><label for="address">  Address </label>:<br/>
            <input type="text"  name="address" placeholder="Customer Address" />
            <span style="color:red"> @error('address'){{$message}} @enderror</span>
        <br /><label for="company">  Company: </label><br/>
            <input type="text"  name="company" placeholder="Customer Company" />
            <span style="color:red"> @error('company'){{$message}} @enderror</span>

            <br />

            <button type="submit" id="submitBut" > Insert</button>
        </div>
    </form>
</body>

</html>
