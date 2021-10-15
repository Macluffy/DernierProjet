<!-- Pricing Area Start -->
<div class="pricing-area pt-95 pb-120 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre = $titre[5]->titre;
        
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
                        <p>{{$titre[5]->paragraphe}} </p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre }} </h2>
                        <p>{{$titre[5]->paragraphe}} </p>
                    </div> 
                
            @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>silver package</h2>
                        <h1>$30<span>/month</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>Free T-Shirt & swags</li>
                            <li>Free of all message treatments</li>
                            <li>Access Clup Facilites</li>
                            <li>Out Door activites</li>
                        </ul>
                        <a href="#">get started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>gold package</h2>
                        <h1>$50<span>/month</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>Free T-Shirt & swags</li>
                            <li>Free of all message treatments</li>
                            <li>Access Clup Facilites</li>
                            <li>Out Door activites</li>
                        </ul>
                        <a href="#">get started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>platinum package</h2>
                        <h1>$70<span>/month</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>Free T-Shirt & swags</li>
                            <li>Free of all message treatments</li>
                            <li>Access Clup Facilites</li>
                            <li>Out Door activites</li>
                        </ul>
                        <a href="#">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Area End -->