@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show trainer</h1>
    </div>
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/'.$trainer->image) }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainer->titre}} </h3>
                        <ul>
                            <li><a href="https://www.facebook.com/"><i class="{{$trainer->icon1}}"></i></a></li>  
                            <li><a href="https://twitter.com/"><i class="{{$trainer->icon2}}"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="{{$trainer->icon3}}"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="{{$trainer->icon4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    
    
    
    <form action="{{route('trainer.destroy',$trainer->id)}} " method="post">
        @csrf
        @method('DELETE')
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
            <a href="{{ route('trainer.edit',$trainer->id) }}" class="btn btn-warning"> Edit</a>
        </div>
    </form>
    </div>
    
    
    
    
    
    
    
    
</div>
@endsection