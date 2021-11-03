<!-- Client Area Strat -->
<section class="client-area pt-95 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre1 = $titre[6]->titre;
        
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
                        <p>{{$titre[6]->paragraphe}}</p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[6]->paragraphe}}</p>
                    </div> 
                
            @endif
            
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="testimonial-owl">
                        @foreach ($client as $value)
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="{{$value->icon}} "></i>
                                <p>{{$value->paragraphe}} </p>
                                <img src="{{ asset('img/icon/'.$value->image) }}" alt="">
                                <h6>{{$value->titre}}</h6>
                            </div>    
                        </div> 
                            
                        @endforeach
                    </div> 
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- Client Area End -->