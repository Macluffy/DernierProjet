 <!-- Trainer Area Start -->
 <div class="trainer-area pt-90 pb-100 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre = $titre[2]->titre;
        
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
                        <p>{{$titre[2]->paragraphe}} </p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre }} </h2>
                        <p>{{$titre[2]->paragraphe}} </p>
                    </div> 
                
            @endif
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/trainer1.jpg') }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>John laisa do</h3>
                        <ul>
                            <li><a href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>  
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/trainer2.jpg') }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>John laisa do</h3>
                        <ul>
                            <li><a href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>  
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">
                <div class="single-trainer text-center">
                    <img src="{{ asset('img/trainer/trainer3.jpg') }}" alt="trainer">
                    <div class="trainer-hover">
                        <h3>John laisa do</h3>
                        <ul>
                            <li><a href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>  
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trainer Area End -->