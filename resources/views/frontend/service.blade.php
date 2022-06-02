
@extends('frontend.layouts.master')
@section('title','Lilium Info Tech - Service')
@section('main_section')
<br>

        
  
@if (!empty($service->description))
    {!! $service->description !!}
@else
    {!! $service->code_description !!}
@endif
  
                 

@endsection