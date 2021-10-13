@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Slider</h1>
    </div>

    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="" style="background-image: url('{{ $slider->imagefond }}'); background-size: cover; background-position: center; width:350px; height:350px">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{ $slider->minititre }}</h5>
                                    {{-- <h1>{{ $titre[0]->titre }}<span></span><h1>
                                    <p>{{ $titre[0]->paragraphe }}</p> --}}
                                    <a class="banner-btn" href="" data-text="read more"><span>{{ $slider->btnreadmore }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
    <form action="{{route('slider.destroy',$slider->id)}} " method="post">
        @method('delete')
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <button type="submit" class="mx-2 btn btn-danger">Delete</button>
            <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-warning"> Edit</a>
        </div>
    </form>


        
        
    
        
        
    </div>
@endsection