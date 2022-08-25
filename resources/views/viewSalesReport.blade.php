<html>
<head>
    <link href="blog.css" rel="stylesheet" />
    <style>


    </style>
</head>

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
<form action="/product/2" method="Get">
@if ( $errors->any() )
    <ol>
        @foreach( $errors->all() as $error)
            <li style="color:red"> {{$error}} </li>
        @endforeach
    </ol>
@endif
<table>
    <div style="margin-left: 400px; display: inline-block; margin-top: 50px">
        <br/>
    <label> Item: </label><br/>
    <select name="customer_item">
        <option value=0 selected>None</option>

        @foreach($sales as $sale)
                <option value={{$sale->id}}> {{$sale->item}}</option>
        @endforeach

    </select>



        <br/>
    <label> Customer Name: </label><br/>
        <select name="customer_name">
            <option value=0 selected>None</option>

        @foreach($customers as $customer)

                <option value="{{$customer->id}}"> {{$customer->name}}</option>
                @endforeach
        </select><br/>
    <label> Sales Amount: </label><br/>

    <select name="customer_amount">
        <option value=0 selected>None</option>

    @foreach($sales as $sale)
            <option value="{{$sale->id}}"> {{$sale->price}}</option>
        @endforeach
    </select>

<button type="submit" id="submitBut" > Search </button>
</div>
</table>
</form>

</body>
</html>
