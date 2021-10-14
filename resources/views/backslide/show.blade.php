@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Slider</h1>
    </div>

    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="" style="background-image: url('{{asset('img/slider/'.$slider->imagefond)}}'); background-size: cover; background-position: center; width:900px; height:350px">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{ $slider->minititre }}</h5>
                                    <h1>{{ $text1 }}<span>{{ $text2 }}</span>{{ $text3 }}<h1>
                                    <p>{{ $slider->paragraphe }}</p>
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
            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
            <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-warning"> Edit</a>
        </div>
    </form>


        
        
    
        
        
    </div>
@endsection