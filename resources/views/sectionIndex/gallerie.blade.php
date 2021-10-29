<!-- Gallery Area Start -->
<section class="gallery-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="test-content">
                    @php
                $titre1 = $titre[3]->titre;
        
                if(preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/"," $titre1", $matches))
                    {
                    $text1 = $matches["avant"]; 
                    $text2 = $matches["entre_par"]; 
                    $text3 = $matches["apres"];
                    }

            @endphp

            @if(count($matches) >0  )
                    <div class="section-title text-center">
                        <h2>{{$text1}}<span class="span">{{$text2}} </span>{{$text3}}</h2>
                        <p>{{$titre[3]->paragraphe}} </p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[3]->paragraphe}} </p>
                    </div> 
                
            @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid" style="position: relative; height: 390px;">
                @foreach ($galleri as $value)
                    <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 0%; top: 0px;">
                        <div class="portfolio-img single-img">
                            <img src="{{ asset('img/portfolio/'.$value->img1) }}" alt="project">
                            <div class="gallery-icon">
                                <a class="image-popup" href="{{ asset('img/portfolio/'.$value->img2) }}">
                                    <i class="{{$value->icon}}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
        
            </div>
        </div>
    </div>
</section>    
<!-- Gallery Area End -->