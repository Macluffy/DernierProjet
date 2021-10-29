@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Schedule</h1>
    </div>
    @php
        $a = 1;
        $b = 2;
        $c = 3;
        $d = 4;
        $e = 5;
        $f = 6;
        $g = 7;
        @endphp
    
    
    <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="">
            <div class="col-xs-12">                             
                <div class="scehedule-table table-responsive text-center">
                    <table>
                        <thead>
                            <tr>
                                <th>{{$schedule->time}} </th>
                                <th>@if($schedule->jour1_id == $a) saturday @endif</th>
                                <th>@if($schedule->jour2_id == $b) sunday @endif</th>
                                <th>@if($schedule->jour3_id == $c) monday @endif</th>
                                <th>@if($schedule->jour4_id == $d) tuesday @endif</th>
                                <th>@if($schedule->jour5_id == $e) wednesday @endif</th>
                                <th>@if($schedule->jour6_id == $f) thursday @endif</th>
                                <th>@if($schedule->jour7_id == $g) friday @endif</th>
                                @php
                                    $a += 7;
                                    $b += 7;
                                    $c += 7;
                                    $d += 7;
                                    $e += 7;
                                    $f += 7;
                                    $g += 7;
                                @endphp
                            </tr>
                        </thead>
                        <tbody class="pt-30">
                            <tr>
                                <td class="time">
                                    <p>{{$schedule->h1}}</p>
                                </td>
                                
                                <td class="purple">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td> 
                                <td></td>
                                <td></td>
                                <td class="purple">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                                <td class="purple">
                                    
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="time">
                                    <p>{{$schedule->h2}}</p>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="olive">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                                <td class="olive">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
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
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="blue">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                                <td class="blue">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="time">
                                    <p>{{$schedule->h4}}</p>
                                </td>
                                <td class="pink">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                                <td></td>
                                <td class="pink">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                                <td class="pink">
                                    <h4></h4>
                                    <p></p>
                                    <p></p>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        
    </div>
    
    
    
    <form action="{{route('schedule.destroy',$schedule->id)}} " method="post">
        @csrf
        @method('DELETE')
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
            <a href="{{ route('schedule.edit',$schedule->id) }}" class="btn btn-warning"> Edit</a>
        </div>
    </form>
    
    
    
    
    
    
    
    
</div>
@endsection