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
        
        @foreach ($schedule as $value)
        <div class="row m5">
            <div class="col-xs-12">                             
                <div class="scehedule-table table-responsive text-center">
                    <table>
                        <thead>
                            <tr>
                                <th>{{$value->time}} </th>
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
                                    <p>{{$value->h1}}</p>
                                </td>
                                
                                <td class="purple">
                                    <h4>yoga for climbers</h4>
                                    <p>pipi</p>
                                    <p>8.00 Am-10.00Am</p>
                                </td> 
                                <td></td>
                                <td></td>
                                <td class="purple">
                                    <h4>yoga for climbers</h4>
                                    <p>Sathi Bhuiyan</p>
                                    <p>8.00 Am-10.00Am</p>
                                </td>
                                <td></td>
                                <td class="purple">
                                    
                                    <h4>yoga for climbers</h4>
                                    <p>Sathi Bhuiyan</p>
                                    <p>8.00 Am-10.00Am</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="time">
                                    <p>{{$value->h2}}</p>
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
                                    <p>{{$value->h3}}</p>
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
        @endforeach 
            <div style="margin:35px; ">
                <h3>{{$schedule->links()}}</h3> 
            </div>
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