
@extends('frontend.layouts.master')
@section('title','Lilium Info Tech - Company Information')
@section('main_section')
<br>

        
  
@if (!empty($company->description))
    {!! $company->description !!}
@else
    {!! $company->code_description !!}
@endif
  
                 

@endsection