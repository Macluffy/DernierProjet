@extends('template.welcomeinscription')

@section('content')

<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Cours {{$classe->titre}} || Inscription</h1>
    </div>

    <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
            <div class="col-md-4 col-sm-6 col-xs-12">     
            <div class="single-class">
                <div class="single-img" style="display:flex; flex-direction:column; align-items:center; justify-content:center;" >
                    <a href="class.html"><img src="{{ asset('img/class/'.$classe->image )}}" alt="class"></a>
                    <div class="gallery-icon">
                        <a class="image-popup" href="{{ asset('img/class/'.$classe->image ) }}">
                            <i class="zmdi zmdi-zoom-in"></i>
                        </a>   
                    </div>
                </div>
                <div class="single-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center;" >
                    <h3><a href="class.html">{{$classe->titre}}</a></h3>
                    <ul>
                        <li><i class="zmdi zmdi-face"></i>{{$classe->nom}}</li>
                        <li><i class="zmdi zmdi-alarm"></i>{{$classe->horraire->heure}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    



@endsection