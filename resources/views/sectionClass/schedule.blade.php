<!-- Schedule Area Strat -->
<section class="schedule-area pt-85 pb-90 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                @php
                $titre1 = $titre[1]->titre;
                
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
                        <p>{{$titre[1]->paragraphe}} </p>
                    </div> 
                    @else
                    <div class="section-title text-center">
                        <h2>{{ $titre1 }} </h2>
                        <p>{{$titre[1]->paragraphe}} </p>
                    </div> 
                    
                    @endif
                </div>
            </div> 
            
            <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row m5 d-block w-100">
                            <div class="col-xs-12">                             
                                <div class="scehedule-table table-responsive text-center">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>{{$schedule[0]->time}} </th>
                                                <th> saturday </th>
                                                <th> sunday </th>
                                                <th> monday </th>
                                                <th> tuesday </th>
                                                <th> wednesday </th>
                                                <th> thursday </th>
                                                <th> friday </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="pt-30">
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h1}}</p>
                                                </td>
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;" >
                                                        <h4 class="greg">{{$classes->titre}} </h4>
                                                        <p class="greg1" >{{$classes->nom}}</p>
                                                        <p class="greg">{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>   
                                                
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h2}}</p>
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h3}}</p>
                                                </td>
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h4}}</p>
                                                </td>
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td> 
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row m5 class">
                            <div class="col-xs-12">                             
                                <div class="scehedule-table table-responsive text-center">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>{{$schedule[1]->time}} </th>
                                                <th> saturday </th>
                                                <th> sunday </th>
                                                <th> monday </th>
                                                <th> tuesday </th>
                                                <th> wednesday </th>
                                                <th> thursday </th>
                                                <th> friday </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="pt-30">
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h1}}</p>
                                                </td>
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "08:00:00")
                                                    <divvstyle="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </divv>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td> 
                                                
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td> 
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td> 
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td> 
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td> 
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h2}}</p>
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h3}}</p>
                                                </td>
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h4}}</p>
                                                </td>
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row m5">
                            <div class="col-xs-12">                             
                                <div class="scehedule-table table-responsive text-center">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>{{$schedule[2]->time}} </th>
                                                <th> saturday </th>
                                                <th> sunday </th>
                                                <th> monday </th>
                                                <th> tuesday </th>
                                                <th> wednesday </th>
                                                <th> thursday </th>
                                                <th> friday </th>
                                            </tr>
                                        </thead>
                                        <tbody class="pt-30">
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h1}}</p>
                                                </td>

                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "08:00:00")
                                                    <td class="purple"  >
                                                        <h4 class="m-0 p-0">{{$classes->titre}} </h4>
                                                        <p class="m-0 p-0">{{$classes->nom}}</p>
                                                        <p class="m-0 p-0">{{$classes->horraire->heure}}</p>
                                                    </td>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>   
                                                    </div>
                                                    
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "08:00:00")
                                                    <div style="background-color:rgb(167, 79, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h2}}</p>
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "12:00:00")
                                                    <div style="background-color:rgb(67, 189, 107)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h3}}</p>
                                                </td>
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "15:00:00")
                                                    <div style="background-color:rgb(42, 100, 167)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h4}}</p>
                                                </td>
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td >
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="p-0 m-0">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "18:00:00")
                                                    <div style="background-color:rgb(117, 115, 116)!important; width:100%!important; height:100px!important; display:flex; justify-content:center; flex-direction:column; align-items:center;">
                                                        <h4>{{$classes->titre}} </h4>
                                                        <p>{{$classes->nom}}</p>
                                                        <p>{{$classes->horraire->heure}}</p>
                                                    </div>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span >Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="">Next</span>
                </button>
            </div>
            
            
            
            
            
            
        </div>
        
        </div>
    </section>
    