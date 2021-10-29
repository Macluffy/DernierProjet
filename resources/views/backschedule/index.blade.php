@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Schedule</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('schedule.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    <div class="" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        @php
        $a = 1;
        $b = 2;
        $c = 3;
        $d = 4;
        $e = 5;
        $f = 6;
        $g = 7;
        @endphp
        @foreach ($schedule as $value)
        <div class="">
            <div class="col-xs-12">                             
                <div class="scehedule-table table-responsive text-center">
                    <table>
                        <thead>
                            <tr>
                                <th>{{$value->time}} </th>
                                <th>@if($value->jour1_id == $a) saturday @endif</th>
                                <th>@if($value->jour2_id == $b) sunday @endif</th>
                                <th>@if($value->jour3_id == $c) monday @endif</th>
                                <th>@if($value->jour4_id == $d) tuesday @endif</th>
                                <th>@if($value->jour5_id == $e) wednesday @endif</th>
                                <th>@if($value->jour6_id == $f) thursday @endif</th>
                                <th>@if($value->jour7_id == $g) friday @endif</th>
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
                                    <p>{{$value->h1}}</p>
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
                                    <p>{{$value->h2}}</p>
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
                                    <p>{{$value->h3}}</p>
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
                                    <p>{{$value->h4}}</p>
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
        <div style="display:flex; justify-content:center; align-items:center; width:100%; margin:30px;">
            <a href="{{ route('schedule.show', $value->id) }}" class="btn btn-warning"> Show</a>
        </div>
        
        @endforeach
    </div>
    
    
    
    
    
</div>
@endsection
