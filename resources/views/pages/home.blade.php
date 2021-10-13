@extends('template/welcome')

@section('content')

    @include('sectionIndex/areastart')
    @include('sectionIndex/about')
    @include('sectionIndex/class')
    @include('sectionIndex/schedule')
    @include('sectionIndex/trainer')
    @include('sectionIndex/gallerie')
    @include('sectionIndex/event')
    @include('sectionIndex/pricing')
    @include('sectionIndex/client')
    
@endsection
