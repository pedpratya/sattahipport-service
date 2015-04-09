@extends('layout.master-mainmanu')

@section('content')

     @foreach($modules['manu'] as $key => $value)
        <div class="box-menu">
        <a href="{{ URL::to('/admin/home') }}">
            <img src="{{ asset($value['images']) }}">            
            <span>{!! $value['name'] !!}</span>
        </a>  
        </div>
    @endforeach
 
@stop