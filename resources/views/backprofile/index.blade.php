@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center m-5" style="margin-bottom:40px">Backoffice || index Profile</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    
    
    <div style="margin-top:200px; width: 100%; display:flex;flex-direction:column;align-items:center; justify-content:start">
        <div>
            
            <h3> <span style="font-weight: bolder;color:black ">Nom :</span>  {{Auth::User()->name}}</h3>
            <p class="m-0"> <span style="font-weight: bolder;color:black ">Email :</span>  {{Auth::User()->email}}</p>
            <p> <span style="font-weight: bolder;color:black ">Abonnement :</span>  {{Auth::User()->abo}}</p>
            @php
                $i=1
            @endphp
            
            @foreach ($inscription as $value)
                @if ($value->nom == Auth::User()->email)
                    <p class="m-0"> <span style="font-weight: bolder;color:black ">Cours {{$i}} :</span> {{$value->classe->titre}} </p>
                    @php
                        $i++
                    @endphp
                @endif

            @endforeach
        </div> 
        

    
        
        
        
        
        
    
    
        
        
        
        
        
        
    </div>
    @endsection
