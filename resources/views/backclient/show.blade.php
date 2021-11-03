@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Client</h1>
    </div>

    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:200px;">
        <div class="col-xs-12">
            <div class="single-testimonial">
                <i class="{{$client->icon}} "></i>
                <p>{{$client->paragraphe}} </p>
                <img src="{{ asset('img/icon/'.$client->image) }}" alt="">
                <h6>{{$client->titre}}</h6>
            </div>    
        </div> 
        
                    <form action="{{route('client.destroy',$client->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
                            <a href="{{ route('client.edit',$client->id) }}" class="btn btn-warning"> Edit</a>
                        </div>
    </form>

    </div>
@endsection