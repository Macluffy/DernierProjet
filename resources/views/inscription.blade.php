@extends('template.welcomeinscription')

@section('content')

<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    
    @endif
</div>

{{-- @php
    $b=count($classes)+1;
@endphp

@for ($e = 0; $e < $b ; $e++)

@if(Request::url() === 'http://127.0.0.1:8000/inscription/'.$e)
@php
    $a = $e-1;
@endphp --}}


<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Cour {{$classes->titre}} || Inscription</h1>
    </div>

    

    <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
            <div class="col-md-4 col-sm-6 col-xs-12">     
            <div class="single-class">
                <div class="single-img" style="display:flex; flex-direction:column; align-items:center; justify-content:center;" >
                    <a href="class.html"><img src="{{ asset('img/class/'.$classes->image )}}" alt="class"></a>
                    <div class="gallery-icon">
                        <a class="image-popup" href="{{ asset('img/class/'.$classes->image ) }}">
                            <i class="zmdi zmdi-zoom-in"></i>
                        </a>   
                    </div>
                </div>
                <div class="single-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center;" >
                    <h3><a href="class.html">{{$classes->titre}}</a></h3>
                    <ul>
                        <li><i class="zmdi zmdi-face"></i>{{$classes->nom}}</li>
                        <li><i class="zmdi zmdi-alarm"></i>{{$classes->horraire->heure}}</li>
                    </ul>
                    <p>{{$classes->jour->date_id}}</p>
                    <h4>Nombre d'inscription :{{count($classes->inscriptions)}}/{{$classes->quantiter}}</h4>
                </div>
            </div>
        </div>
    </div>


@php
    $m = $classes->inscriptions;
    $d = 0;
    
@endphp
    

@foreach ($m as $value)
    @if ($value->nom ==  Auth::User()->email)
        {{$d = 6}}
        <h5 style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; pading:30px;background-color:rgb(245, 89, 41); color:white;">Vous êtes deja inscrit</h5> 

    @endif
@endforeach

@if ($d != 6)

    @if (count($classes->inscriptions) == $classes->quantiter)
        <h5 style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; pading:30px;background-color:rgb(250, 65, 65); color:white;">Ce cour est complet</h5>
    @else
        <form action="{{ route('inscription.store') }}" style="margin-left:50px" method="post" >
                
            @csrf
        
            </div>
            <div class="mb-3 hidden">
                <input type="text" class="form-control" style="width: 25%" name="classe_id" value="{{$classes->id}}">
            
            </div>
            <div class="mb-3 hidden">
                <input type="text" class="form-control" style="width: 25%" name="nom" value="{{Auth::User()->email}} ">
            </div>
            <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
                <button type="submit" class="btn btn-primary">Inscription</button>
            </div>
        </form> 
    @endif
@endif



        
    {{-- @endif
@endfor --}}
@endsection





