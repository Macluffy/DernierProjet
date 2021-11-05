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
            @php
            
                $o = count($value->inscriptions);
                $b = $value->quantiter - $o;
                $f = $value->horraire->heure;
                $x = $value->date->calendrier;
                
                
                $currentdate = date('Y/m/d'); 
                
                $cd = explode("/", $currentdate); 
                $dx = explode("-", $x);
                $dateactuel = $cd[0].$cd[1].$cd[2];
                $datecour = $dx[0].$dx[1].$dx[2];

                $currenttime = date("H:i:s");
                $t = explode(":", $currenttime); 
                $n = explode(":", $f); 
                $timernow= $t[0].$t[1].$t[2];
                $timerclass= $n[0].$n[1].$n[2];
                

                
            @endphp
            
            
            @if ( $b < 3 && $b > 1)
            <div class="col-md-4 col-sm-6 col-xs-12 " >
                <div class="single-class" >
                    <div class="single-img"  >
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    
                    <div class="single-content" style="background-color:rgb(235, 150, 81) ">
                        <h3  ><a href="{{route('inscription.show',$value->id)}}">{{$value->titre}}</a></h3>
                        <ul  >
                            <li><i class="zmdi zmdi-face"></i>{{$value->nom}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$value->horraire->heure}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            @elseif ( $dateactuel == $datecour && $timernow >= $timerclass)


                <div class="col-md-4 col-sm-6 col-xs-12" >     
                <div class="single-class" >
                    <div class="single-img"  >
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    
                    <div class="single-content" style="background-color:rgb(250, 59, 59) ">
                        <h3  ><a href="{{route('inscription.show',$value->id)}}">{{$value->titre}}</a></h3>
                        <ul  >
                            <li><i class="zmdi zmdi-face"></i>{{$value->nom}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$value->horraire->heure}}</li>
                        </ul>
                    </div>
                </div>
            </div>
                
            @elseif ( $dateactuel >= $datecour )


                <div class="col-md-4 col-sm-6 col-xs-12  " >     
                <div class="single-class" >
                    <div class="single-img"  >
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    
                    <div class="single-content" style="background-color:rgb(250, 59, 59) ">
                        <h3  ><a href="{{route('inscription.show',$value->id)}}">{{$value->titre}}</a></h3>
                        <ul  >
                            <li><i class="zmdi zmdi-face"></i>{{$value->nom}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$value->horraire->heure}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            @elseif ( $b == 0)


                <div class="col-md-4 col-sm-6 col-xs-12 " >     
                <div class="single-class" >
                    <div class="single-img"  >
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    
                    <div class="single-content" style="background-color:rgb(250, 59, 59) ">
                        <h3  ><a href="{{route('inscription.show',$value->id)}}">{{$value->titre}}</a></h3>
                        <ul  >
                            <li><i class="zmdi zmdi-face"></i>{{$value->nom}}</li>
                            <li><i class="zmdi zmdi-alarm"></i>{{$value->horraire->heure}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            @elseif ($value->order == true )


                <div class="col-md-4 col-sm-6 col-xs-12 " >     
                <div class="single-class" >
                    <div class="single-img"  >
                        <a href="class.html"><img src="{{ asset('img/class/'.$value->image )}}" alt="class"></a>
                        <div class="gallery-icon">
                            <a class="image-popup" href="{{ asset('img/class/'.$value->image ) }}">
                                <i class="zmdi zmdi-zoom-in"></i>
                            </a>   
                        </div>
                    </div>
                    
                    <div class="single-content" style="background-color:rgb(136, 255, 136) ">
                        <h3  ><a href="{{route('inscription.show',$value->id)}}">{{$value->titre}}</a></h3>
                        <ul  >
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