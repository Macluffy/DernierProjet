@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Classes</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    
        <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
            @foreach ($class as $value)
                <div class="col-md-4 col-sm-6 col-xs-12">     
                <div class="single-class">
                    <div class="single-img" style="display:flex; flex-direction:column; align-items:center; justify-content:center;" >
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    <div class="single-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center;" >
                        <h3><a href="class.html">{{$value->titre}}</a></h3>
                        <ul>
                            <li><i class="zmdi zmdi-face"></i>{{$value->nom}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$value->heure}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style="display:flex; justify-content:center; align-items:center; width:100%; margin:30px;">
                <a href="{{ route('classe.show', $value->id) }}" class="btn btn-warning"> Show</a>
            </div>
            @endforeach
        </div>
        
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                @endsection
