@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Slider</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('slider.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    @foreach ($slider as $value)
    @php
    $titre = $value->titre;

    if(preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/", " $titre",
        $matches)){
            $text1 = $matches['avant']; 
        $text2 = $matches['entre_par']; 
        $text3 = $matches['apres']; 
        }
          
        @endphp
        
        
        
        @if(count($matches) >0)

            <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
                <div class=""
                style="background-image: url('{{ asset('img/slider/' . $value->imagefond) }}'); background-size: cover; background-position: center; width:900px; height:350px">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-left">
                                        <h5>{{ $value->minititre }}</h5>
                                        <h1>{{ $text1 }}<span>{{ $text2 }}</span>{{ $text3 }}
                                            <h1>
                                                <p>{{ $value->paragraphe }}</p>
                                                <a class="banner-btn" href=""
                                                data-text="read more"><span>{{ $value->btnreadmore }}</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                    <a href="{{ route('slider.show', $value->id) }}" class="btn btn-warning"> Show</a>
                </div>
    @else
                
                <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
                    <div class=""
                    style="background-image: url('{{ asset('img/slider/' . $value->imagefond) }}'); background-size: cover; background-position: center; width:900px; height:350px">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-left">
                                            <h5>{{ $value->minititre }}</h5>
                                            <h1>{{ $value->titre }}
                                                <h1>
                                                    <p>{{ $value->paragraphe }}</p>
                                                    <a class="banner-btn" href=""
                                                    data-text="read more"><span>{{ $value->btnreadmore }}</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                        <a href="{{ route('slider.show', $value->id) }}" class="btn btn-warning"> Show</a>
                    </div>
                    @endif
                    
                    
                    
                    
                    
                    
                    @endforeach
                    
                    
                    
                    
                    
                    
                </div>
                @endsection
