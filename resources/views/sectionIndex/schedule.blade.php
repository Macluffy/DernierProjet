






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

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
                                                <td class="purple">
                                                @foreach ($classe as $classes)
                                                
                                                @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                
                                                
                                                    @endif
                                                    
                                                    @endforeach
                                                
                                                </td>
                                                
                                                <td class="purple">
                                                @foreach ($classe as $classes)
                                                
                                                @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h2}}</p>
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h3}}</p>
                                                </td>
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h4}}</p>
                                                </td>
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-24" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-25" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-26" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-27" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-28" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-29" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
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
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h2}}</p>
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h3}}</p>
                                                </td>
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h4}}</p>
                                                </td>
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-10-31" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-01" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-02" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-03" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-04" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-05" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
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
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="purple">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "08:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h2}}</p>
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="olive">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "12:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h3}}</p>
                                                </td>
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="blue">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "15:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="time">
                                                    <p>{{$schedule[0]->h4}}</p>
                                                </td>
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-07" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-08" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-09" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-10" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-11" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
                                                    @endif
                                                    
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="pink">
                                                    @foreach ($classe as $classes)
                                                    
                                                    @if ($classes->date->calendrier == "2021-11-12" && $classes->horraire->heure == "18:00:00")
                                                    <h4>{{$classes->titre}} </h4>
                                                    <p>{{$classes->nom}}</p>
                                                    <p>{{$classes->horraire->heure}}</p>
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
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
                

                
                
            
        </div>
        {{-- @php
            static $ali = 1;
            @endphp
            @foreach ($schedule as $schedule)
            <div class="row m5">
                <div class="col-xs-12">                             
                    <div class="scehedule-table table-responsive text-center">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{$schedule->time}} </th>
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
                                        <p>{{$schedule->h1}}</p>
                                    </td>
                                    @foreach ($classe as $classes)
                                    @if ($ali == 1)
                                    @if ($classes->date->calendrier == "2021-10-23" && $classes->horraire->heure == "08:00:00")
                                    <td class="purple">
                                        <h4>{{$classes->titre}} </h4>
                                        <p>{{$classes->nom}}</p>
                                        <p>{{$classes->horraire->heure}}</p>
                                    </td>
                                    @endif
                                    @elseif ($ali == 2)
                                    @if ($classes->date->calendrier == "2021-10-30" && $classes->horraire->heure == "08:00:00")
                                    <td class="purple">
                                        <h4>{{$classes->titre}} </h4>
                                        <p>{{$classes->nom}}</p>
                                        <p>{{$classes->horraire->heure}}</p>
                                    </td>
                                    
                                    
                                    @endif
                                    @elseif ($ali == 3)
                                    @if ($classes->date->calendrier == "2021-11-06" && $classes->horraire->heure == "08:00:00")
                                    <td class="purple">                                   
                                        <h4>{{$classes->titre}} </h4>
                                        <p>{{$classes->nom}}</p>
                                        <p>{{$classes->horraire->heure}}</p>
                                    </td>
                                    
                                    @endif
                                    @endif
                                    
                                    @endforeach
                                    
                                    @php
                                    $ali++;
                                    @endphp
                                    
                                    <td class="purple">
                                        
                                        <h4>dimache</h4>
                                        <p></p>
                                        <p></p>
                                        
                                    </td>
                                    <td class="purple">
                                        <h4>lundi</h4>
                                        <p></p>
                                        <p></p>
                                    </td>
                                    <td class="purple">
                                        <h4>mardi</h4>
                                        <p></p>
                                        <p></p>
                                    </td>
                                    <td class="purple">
                                        <h4>mercredi</h4>
                                        <p></p>
                                        <p></p>
                                    </td>
                                    <td class="purple">
                                        
                                        <h4>jeudi</h4>
                                        <p></p>
                                        <p></p>
                                    </td>
                                    <td class="purple">
                                        <h4>vendredi</h4>
                                        <p></p>
                                        <p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="time">
                                        <p>{{$schedule->h2}}</p>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="olive">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                    <td class="olive">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="time">
                                        <p>{{$schedule->h3}}</p>
                                    </td>
                                    <td></td>
                                    <td class="blue">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="blue">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                    <td class="blue">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="time">
                                        <p>{{$value->h4}}</p>
                                    </td>
                                    <td class="pink">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td class="pink">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                    <td class="pink">
                                        <h4>yoga for climbers</h4>
                                        <p>Sathi Bhuiyan</p>
                                        <p>8.00 Am-10.00Am</p>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            @endforeach  --}}
            {{-- <div style="margin:35px; ">
                <h3>{{$schedule->links()}}</h3> 
            </div> --}}
        </div>
    </section>
    <!-- Schedule Area End -->
    
    {{-- <div style="margin:20px;">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div> --}}