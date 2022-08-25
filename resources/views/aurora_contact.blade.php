@extends('layouts/auroraMaster')
@section("navigation-bar")
    <a href="/home">Home</a> |
    <a href="/contact"><b>Contact</b></a>
    <a href="/about"><b>About Us</b></a>
@stop
@section("content")
    Here is the contact form
    <form>
        Name: <input type="text" value="">
        <button type="submit"> Click it!</button>
    </form>


@stop
