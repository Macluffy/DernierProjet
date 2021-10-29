@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Event</h1>
    </div>

    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:200px;">
        <div class="event-content text-center">
            <h3>{{$event->titre}} </h3>
            <p> {{$event->paragraphe}}</p>
            <h4>{{$event->date}}</h4>
            <h5>{{$event->heure}}</h5>
        </div> 
                    <form action="{{route('event.destroy',$event->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
                            <a href="{{ route('event.edit',$event->id) }}" class="btn btn-warning"> Edit</a>
                        </div>
    </form>

    </div>
@endsection