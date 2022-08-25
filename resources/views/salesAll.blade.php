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
        <th class="col"> ID </th> <th class="col"> Date </th>
        <th  class="col"> Time </th> <th class="col"> Customer Name </th><th class="col"> Sold </th>
        <th class="col"> item </th><th class="col"> price </th>
        <th class="col"> Delete </th><th class="col"> Update </th>
    </tr>
    @foreach( $sales as $sales)
        <tr class="oddTD">
            <td> {{$sales->id}} </td>
            <td> {{$sales->date}} </td>
            <td> {{$sales->time}} </td>
            @foreach($customers as $customer)
                @if($sales->customer_id == $customer->id)
                <td> {{$customer->name}} </td>
                @endif
            @endforeach
            <td> {{$sales->sold}} </td>

            <td> {{$sales->item}} </td>
            <td> {{$sales->price}} </td>


            <td>
                <form  action="/sales/{{$sales->id}}" method="POST" />
                @method("DELETE")
                @csrf
                <button type="submit" id="deleteBut" > Delete {{$sales->id}}</button>
                </form>
            </td>
            <td>
                <form  action="/sales/{{$sales->id}}/edit" method="get"/>
                @csrf
                <button type="submit"  id="updateBut" > Update: {{$sales->id}}</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@if ( $errors->any() )
    <ol>
        @foreach( $errors->all() as $error)
            <li style="color:red"> {{$error}} </li>
        @endforeach
    </ol>
@endif

        <form  action="/sales" method="POST" />
    <div style="margin-left: 400px; display: inline-block; margin-top: 20px">
            @csrf
            <br /><label for="id"> ID </label>:<br/>
            <input type="number"  name="id" placeholder="sales id" />
            <span style="color:red"> @error('id'){{$message}} @enderror</span>
            <br /><label for="date"> Date </label>:<br/>
            <input type="text"  name="date" placeholder="date" />
            <span style="color:red"> @error('date'){{$message}} @enderror</span>
            <br /><label for="time">  Time </label>:<br/>
            <input type="text"  name="time" placeholder="time" />
            <br /> Customer:<br/>
           <select name="customer_id">
                @foreach($customers as $customer)
                    <option value="{{$customer->id}}"> {{$customer->name}}</option>
                @endforeach
            </select>
            <br /><label for="sold"> Sold </label>:<br/>
            <input type="number"  name="sold" placeholder="sold" />
            <span style="color:red"> @error('sold'){{$message}} @enderror</span>
            <br /><label for="item">  item </label>:<br/>
            <input type="text"  name="item" placeholder="item" />
            <span style="color:red"> @error('item'){{$message}} @enderror</span>
            <br /><label for="price">  price </label>:<br/>
            <input type="text"  name="price" placeholder="price" />
            <span style="color:red"> @error('price'){{$message}} @enderror</span>



            <button type="submit" id="submitBut" > Insert </button>
    </div>

        </form>

</body>
</html>
