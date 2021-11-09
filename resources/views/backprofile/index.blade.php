@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Profile</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    
    
    @foreach ($inscription as $value)
    @if ($value->nom == Auth::User()->email)
        <div style="width: 100%; display:flex;flex-direction:column;align-items:center; justify-content:center">
            <h3> {{Auth::User()->name}}</h3>
            <p>{{$value->nom}} </p>
            <p>{{$value->classe->titre}} </p>


        </div> 
    @endif
    
    

    
        
        
        
        
        
    
    @endforeach
        
        
        
        
        
        
    </div>
    @endsection
