@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Slider</h1>
    </div>

    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
            
        @endif
    </div>
    <div>
        <a href="{{ route('slider.create') }}" class="btn btn-primary"> create</a>
    </div>
    @foreach ($slider as $value)
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="" style="background-image: url('{{ $value->imagefond }}'); background-size: cover; background-position: center; width:350px; height:350px">
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                        <div class="text-content-wrapper">
                            <div class="text-content text-left">
                                <h5>{{ $value->minititre }}</h5>
                                {{-- <h1>{{ $titre[0]->titre }}<span></span><h1>
                                    <p>{{ $titre[0]->paragraphe }}</p> --}}
                                    <a class="banner-btn" href="" data-text="read more"><span>{{ $value->btnreadmore }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('slider.show',$value->id) }}" class="btn btn-warning"> Show</a>
        </div>
        @endforeach
        
        
        
    
        
        
    </div>
@endsection