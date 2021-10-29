 <!-- Trainer Area Start -->
 <div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre1 = $titre[2]->titre;
        
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
                        <p>{{$titre[2]->paragraphe}} </p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[2]->paragraphe}} </p>
                    </div> 
                
            @endif
            @php
                $c = count($trainer)-1;
                
                $i = rand(0,$c);
                $o = rand(0,$c);
                while ($o == 1) 
                    $o = rand(0,$c);
                while ($i == $o || $i == 1) 
                    $i = rand(0,$c);
                $p = $trainer1[0]->id-1;
                // while ($i == $o || $i == ($trainer1[0]->id+1)) 
                
            @endphp
        
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/'.$trainer[$i]->image) }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainer[$i]->titre}} </h3>
                        <ul>
                            <li><a href="{{$trainer[$i]->lien1}}"><i class="{{$trainer[$i]->icon1}}"></i></a></li>  
                            <li><a href="{{$trainer[$i]->lien2}}"><i class="{{$trainer[$i]->icon2}}"></i></a></li>
                            <li><a href="{{$trainer[$i]->lien3}}"><i class="{{$trainer[$i]->icon3}}"></i></a></li>
                            <li><a href="{{$trainer[$i]->lien4}}"><i class="{{$trainer[$i]->icon4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/'.$trainer[$p]->image) }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainer[$p]->titre}} </h3>
                        <ul>
                            <li><a href="{{$trainer[$p]->lien1}}"><i class="{{$trainer[$p]->icon1}}"></i></a></li>  
                            <li><a href="{{$trainer[$p]->lien2}}"><i class="{{$trainer[$p]->icon2}}"></i></a></li>
                            <li><a href="{{$trainer[$p]->lien3}}"><i class="{{$trainer[$p]->icon3}}"></i></a></li>
                            <li><a href="{{$trainer[$p]->lien4}}"><i class="{{$trainer[$p]->icon4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/'.$trainer[$o]->image) }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>{{$trainer[$o]->titre}} </h3>
                        <ul>
                            <li><a href="{{$trainer[$o]->lien1}}"><i class="{{$trainer[$o]->icon1}}"></i></a></li>  
                            <li><a href="{{$trainer[$o]->lien2}}"><i class="{{$trainer[$o]->icon2}}"></i></a></li>
                            <li><a href="{{$trainer[$o]->lien3}}"><i class="{{$trainer[$o]->icon3}}"></i></a></li>
                            <li><a href="{{$trainer[$o]->lien4}}"><i class="{{$trainer[$o]->icon4}}"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trainer Area End -->