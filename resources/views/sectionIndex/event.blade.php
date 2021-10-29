<!-- Event Area Strat -->
<section class="event-area pt-95 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre1 = $titre[4]->titre;
        
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
                        <p>{{$titre[4]->paragraphe}} </p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[4]->paragraphe}}</p>
                    </div> 
                
            @endif
                <div class="event-wrapper">
                    <div class="event-content text-center">
                        <h3>{{$event[0]->titre}} </h3>
                        <p> {{$event[0]->paragraphe}}</p>
                        <h4>{{$event[0]->date}}</h4>
                        <h5>{{$event[0]->heure}}</h5>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Area End -->