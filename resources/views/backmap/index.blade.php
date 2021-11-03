@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Map</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    
    
        <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
            <div id="contacts" class="map-area">
            
                <iframe width="100%" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1920&amp;height=380&amp;hl=en&amp;q={{$map[0]->voie}}%20{{$map[0]->nom}}%20{{$map[0]->numero}}%20{{$map[0]->ville}}+(handstand)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://mapswebsite.net/fr'>mapswebsite.net/fr</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=da742cedf02635646206bf9988d1881bdace4c4a'></script>
    
            </div>
            
                    <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                        
                        <a href="{{ route('map.edit',$map[0]->id) }}" class="btn btn-warning"> Edit</a>
                    </div>
           
        </div>
        

                    
                    
                    
                </div>
                @endsection
