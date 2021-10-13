@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Titre</h1>
    </div>

    <div class="section-title text-center" style="background-color:rgb(255, 255, 192)">
        <h2>{{$titre->titre}} </h2>
        <p> {{$titre->paragraphe}}</p>
    </div> 


    
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('titre.edit',$titre->id) }}" class="btn btn-success"> Edit</a>
        </div>
    </div>
@endsection