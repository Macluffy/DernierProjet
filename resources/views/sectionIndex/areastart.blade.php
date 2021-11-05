<!-- Background Area Start -->


<div class="slider-area">
    <div class="slider-wrapper">
        
        
        @php
        
        
        $i = $sli[0]->id;
        $i -= 1;
        
        unset($slider[$i]);

        
        
        $popo = $sli[0]->titre;
        
        
        if(preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/"," $popo", $matches)){
            $text1 = $matches["avant"]; 
            $text2 = $matches["entre_par"]; 
            $text3 = $matches["apres"];
            
        }
        
        @endphp
            
            
            
            
            @if(count($matches) >0 )
            <div class="single-slide" style="background-image: url('{{asset('img/slider/'.$sli[0]->imagefond)}}');">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-left">
                                        <h5>{{ $sli[0]->minititre }}</h5>
                                        <h1>{{ $text1 }}<span>{{ $text2 }}</span>{{ $text3 }}<h1>
                                        <p>{{ $sli[0]->paragraphe }}</p>
                                        <a class="banner-btn" href="galleri" data-text="read more"><span>{{ $sli[0]->btnreadmore }}</span></a>
                                    </div>
                                </div>    
                            </div>    
                        </div>    
                    </div>    
                </div>    
            </div> 
                
                
            @else
                <div class="single-slide" style="background-image: url('{{asset('img/slider/'.$sli[0]->imagefond)}}');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-left">
                                            <h5>{{ $sli[0]->minititre }}</h5>
                                            <h1>{{ $sli[0]->titre }}<h1>
                                            <p>{{ $sli[0]->paragraphe }}</p>
                                            <a class="banner-btn" href="galleri" data-text="read more"><span>{{ $sli[0]->btnreadmore }}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        


        @foreach ($slider as $value)
        @php
        $titre = $value->titre;
        
        if(preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/"," $titre", $matches)){
            $text1 = $matches["avant"]; 
            $text2 = $matches["entre_par"]; 
            $text3 = $matches["apres"];
        }
            
            
            
            @endphp
            
            
            
            
            @if(count($matches) >0 )
            <div class="single-slide" style="background-image: url('{{asset('img/slider/'.$value->imagefond)}}');">
                <div class="slider-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                <div class="text-content-wrapper">
                                    <div class="text-content text-left">
                                        <h5>{{ $value->minititre }}</h5>
                                        <h1>{{ $text1 }}<span>{{ $text2 }}</span>{{ $text3 }}<h1>
                                            <p>{{ $value->paragraphe }}</p>
                                            <a class="banner-btn" href="galleri" data-text="read more"><span>{{ $value->btnreadmore }}</span></a>
                                        </div>
                                    </div>    
                                </div>    
                            </div>    
                        </div>    
                    </div>    
                </div> 
                
                
                @else
                <div class="single-slide" style="background-image: url('{{asset('img/slider/'.$value->imagefond)}}');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-left">
                                            <h5>{{ $value->minititre }}</h5>
                                            <h1>{{ $value->titre }}<h1>
                                                <p>{{ $value->paragraphe }}</p>
                                                <a class="banner-btn" href="galleri" data-text="read more"><span>{{ $value->btnreadmore }}</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    
                </div>
            </div>
            <!-- Background Area End -->

            