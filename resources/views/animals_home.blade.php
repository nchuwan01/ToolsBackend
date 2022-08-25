@extends("layouts/AnimalsMaster");
@section("col1")
    Search for Animal Sound
    <form name="myForm" action="animalsFetch" method="get">

        <br/> Sound: <input type="text" name="sound" />
        <button type="submit">Search It</button>
    </form>
@stop

@section("col2")
    <table class="table table-striped">
        <tr>
            <th>ID</th>            <th>Animal</th>
            <th>Sound</th>            <th>Count</th>
        </tr>
{{--
        <?php $totCount = 0; ?>
--}}
          {{--  @foreach($animals as $animal)
                @if($animals-> name=="Chicken")
                   <?php $color='yellow'; ?>
            @else
                <?php $color='white'; ?>
            @endif--}}
                <tr style="background-color: {{$color}}">

                    <td>{{$animal->id}}</td>
                    <td>{{$animal->name}}</td>
                    <td>{{$animal->sound}}</td>
                    <td>{{$animal->count}}</td>
                   <?php /*$totCount += $animal ->count */?>
                </tr>
{{--            @endforeach
        Total : {{$totCount}}--}}

    </table>
@stop
