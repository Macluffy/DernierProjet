@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Event</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('event.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    @foreach ($event as $value)
    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="event-content text-center">
            <h3>{{$value->titre}} </h3>
            <p> {{$value->paragraphe}}</p>
            <h4>{{$value->date}}</h4>
            <h5>{{$value->heure}}</h5>
        </div> 


        
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('event.show', $value->id) }}" class="btn btn-warning"> Show</a>
        </div>
        
        
        
        
        
        
    </div>    
        @endforeach
        
        
        
        
        
        
    </div>
    @endsection
