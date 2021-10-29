@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Trainer</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('trainer.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    @foreach ($trainer as $value) 
    
    
    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-trainer text-center">
                <img src="{{ asset('img/trainer/'.$value->image) }}" alt="trainer">
                <div class="trainer-hover">
                    <h3>{{$value->titre}} </h3>
                    <ul>
                        <li><a href="https://www.facebook.com/"><i class="{{$value->icon1}}"></i></a></li>  
                        <li><a href="https://twitter.com/"><i class="{{$value->icon2}}"></i></a></li>
                        <li><a href="https://dribbble.com/"><i class="{{$value->icon3}}"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="{{$value->icon4}}"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('trainer.show', $value->id) }}" class="btn btn-warning"> Show</a>
        </div>
        
    </div>
    @endforeach
    @endsection
