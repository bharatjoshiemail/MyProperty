@extends('welcome')

@section('content')    
                       
<h4> <a href="/myproperty" >Back</a></h4>
<h3> {{ $title }} for {{ $postcode }} </h3>

<?php $i=0; ?>
@foreach($plumberList['data']['markers'] as $p)
<div class="col-sm-4 col-md-4 col-lg-4">
    <div class="thumbnail">
        <a href="" >				  
            <div class="caption">
                <p class="classname" >{{ $plumberList['data']['markers'][$i]['name'] }}</p>
                <p>Distance : {{ round($plumberList['data']['markers'][$i]['distance'],1) }} miles</p>
                <p>Tel. : {{ $plumberList['data']['markers'][$i]['phone'] }}</p>
               
            </div>
        </a>
    </div>
</div>
<?php $i++; ?>
@endforeach
<?php
//dd($plumberList);
?>

                   
@endsection