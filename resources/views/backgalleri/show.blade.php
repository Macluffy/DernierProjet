@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Gallery</h1>
    </div>
    
    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="portfolio-img single-img">
            <img src="{{ asset('img/portfolio/'.$gallery->img1) }}" alt="project">
            <div class="gallery-icon">
                <a class="image-popup" href="{{ asset('img/portfolio/'.$gallery->img2) }}">
                    <i class="{{$gallery->icon}}"></i>
                </a>
            </div>
        </div>
        
    </div>
    
    
    
    <form action="{{route('gallery.destroy',$gallery->id)}} " method="post">
        @csrf
        @method('DELETE')
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
            <a href="{{ route('gallery.edit',$gallery->id) }}" class="btn btn-warning"> Edit</a>
        </div>
    </form>
    
    
    
    
    
    
    
    
</div>
@endsection