@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Messagerie</h1>
    </div>

    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:200px;">
        <div class="messagerie-content text-center">
            <h3>{{$messagerie->name}} </h3>
            <p> {{$messagerie->msg}}</p>
            <h4>{{$messagerie->email}}</h4>
            <
        </div> 
                    <form action="{{route('messagerie.destroy',$messagerie->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
                        </div>
    </form>

    </div>
@endsection