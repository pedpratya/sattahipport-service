@extends('layout.master-mainmanu')

@section('content')

     @foreach($modules['manu'] as $key => $value)

        <a href="{{ $value['url'].$value['id'] }}">
            <div class="box-menu">
                <img src="{{ asset($value['images']) }}">            
                <span>{!! $value['name'] !!}</span>
            </div>
        </a>  

    @endforeach
        <a href="{{ asset('page/444') }}">   
            <div class="box-menu">

                <span>ยังไม่ทราบเมนู</span>

            </div>        
        </a>
@stop