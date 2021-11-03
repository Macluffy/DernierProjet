<!-- Pricing Area Start -->
<div class="pricing-area pt-95 pb-120 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre1 = $titre[5]->titre;
        
                if(preg_match("/^(?P<avant>[^)(]*)?(?P<tout_par>\((?P<entre_par>[^)()]+)\))(?P<apres>[^)(]*)?$/"," $titre1", $matches))
                    {
                    $text1 = $matches["avant"]; 
                    $text2 = $matches["entre_par"]; 
                    $text3 = $matches["apres"];
                    }

            @endphp

            @if(count($matches) >0)
                    <div class="section-title text-center">
                        <h2>{{$text1}}<span class="span">{{$text2}} </span>{{$text3}}</h2>
                        <p>{{$titre[5]->paragraphe}} </p>
                    </div> 
                @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[5]->paragraphe}} </p>
                    </div> 
                
            @endif
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricing[0]->pack}} </h2>
                        <h1>{{$pricing[0]->prix}}<span>{{$pricing[0]->month}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricing[0]->li1}}</li>
                            <li>{{$pricing[0]->li2}}</li>
                            <li>{{$pricing[0]->li3}}</li>
                            <li>{{$pricing[0]->li4}}</li>
                        </ul>
                        <a href="/register">{{$pricing[0]->btn}}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricing[1]->pack}} </h2>
                        <h1>{{$pricing[1]->prix}}<span>{{$pricing[1]->month}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricing[1]->li1}}</li>
                            <li>{{$pricing[1]->li2}}</li>
                            <li>{{$pricing[1]->li3}}</li>
                            <li>{{$pricing[1]->li4}}</li>
                        </ul>
                        <a href="/register2">{{$pricing[1]->btn}}</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricing[2]->pack}} </h2>
                        <h1>{{$pricing[2]->prix}}<span>{{$pricing[2]->month}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricing[2]->li1}}</li>
                            <li>{{$pricing[2]->li2}}</li>
                            <li>{{$pricing[2]->li3}}</li>
                            <li>{{$pricing[2]->li4}}</li>
                        </ul>
                        <a href="/register3">{{$pricing[2]->btn}}</a>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
<!-- Pricing Area End -->