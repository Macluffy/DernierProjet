<!-- Client Area Strat -->
<section class="client-area pt-95 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre = $titre[6]->titre;
        
                if(preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/"," $titre", $matches))
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
                        <h2>{{ $titre }} </h2>
                        <p>{{$titre[6]->paragraphe}}</p>
                    </div> 
                
            @endif
            
            </div>
        </div>
        <div class="row"> 
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="testimonial-owl">
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                <img src="{{ asset('img/icon/signature.png') }}" alt="signature">
                                <h6>Co-Founder Of Company</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                <img src="{{ asset('img/icon/signature.png') }}" alt="signature">
                                <h6>Co-Founder Of Company</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                <img src="{{ asset('img/icon/signature.png') }}" alt="signature">
                                <h6>Co-Founder Of Company</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                <img src="{{ asset('img/icon/signature.png') }}" alt="signature">
                                <h6>Co-Founder Of Company</h6>
                            </div>    
                        </div> 
                        <div class="col-xs-12">
                            <div class="single-testimonial">
                                <i class="zmdi zmdi-quote"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                <img src="{{ asset('img/icon/signature.png') }}" alt="signature">
                                <h6>Co-Founder Of Company</h6>
                            </div>    
                        </div>  
                    </div> 
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- Client Area End -->