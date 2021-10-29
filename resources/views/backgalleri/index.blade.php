@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Gallery</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('gallery.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        @foreach ($gallery as $value)
        
            <div class="portfolio-img single-img">
                <img src="{{ asset('img/portfolio/'.$value->img1) }}" alt="project">
                <div class="gallery-icon">
                    <a class="image-popup" href="{{ asset('img/portfolio/'.$value->img2) }}">
                        <i class="{{$value->icon}}"></i>
                    </a>
                </div>
            </div>
            <div style="display:flex; justify-content:center; align-items:center; width:100%; margin:30px;">
                <a href="{{ route('gallery.show', $value->id) }}" class="btn btn-warning"> Show</a>
            </div>
        
        @endforeach
    </div>
    
    
    
    
    
</div>
@endsection
