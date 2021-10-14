<!-- Background Area Start -->




<div class="slider-area">	
    <div class="slider-wrapper">
        @foreach ($slider as $value)
        @php
            $titre = $value->titre;
            
            preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/"," $titre", $matches);
                $text1 = $matches["avant"]; // tout ce qu'il y a avant les parenthèses, optionel => 'Bordeaux '
                $text2 = $matches["entre_par"]; // intérieur => '33000'
                $text3 = $matches["apres"];



            

            
            

    
        @endphp

        @if(count($matches) >0)
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