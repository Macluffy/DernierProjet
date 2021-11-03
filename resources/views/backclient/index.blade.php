@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Client</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('client.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    @foreach ($client as $value)
    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="col-xs-12">
            <div class="single-testimonial">
                <i class="{{$value->icon}} "></i>
                <p>{{$value->paragraphe}} </p>
                <img src="{{ asset('img/icon/'.$value->image) }}" alt="">
                <h6>{{$value->titre}}</h6>
            </div>    
        </div> 
    

        
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('client.show', $value->id) }}" class="btn btn-warning"> Show</a>
        </div>
        
        
        
        
        
        
    </div>    
        @endforeach
        
        
        
        
        
        
    </div>
    @endsection
