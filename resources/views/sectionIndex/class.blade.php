 <!-- Classes Start -->
 <section class="class-area fix bg-gray pb-100 pt-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                
                @php
                $titre1 = $titre[0]->titre;
                
        
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
                        <p>{{$titre[0]->paragraphe}}</p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[0]->paragraphe}}</p>
                    </div> 
                
            @endif
                    
            
            </div>
            
        </div>
        <div class="row"> 
            
            @foreach ($classe as $value)
            @if ($value->order == true)
                
            
                <div class="col-md-4 col-sm-6 col-xs-12">     
                <div class="single-class">
                    <div class="single-img">
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    
                    <div class="single-content">
                        <h3><a href="class.html">{{$value->titre}}</a></h3>
                        <ul>
                            <li><i class="zmdi zmdi-face"></i>{{$value->nom}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$value->horraire->heure}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        {{-- <div class="row">
            <div class="col-xs-12 text-center">
                <a class="banner-btn mt-55" href="class.html" data-text="view all classes"><span>view all classes</span></a>
            </div>
        </div> --}}
    </div>
</section>
<!-- Class Area End -->