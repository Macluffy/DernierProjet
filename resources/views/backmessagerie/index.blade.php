@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Messagerie</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">btn</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messagerie as $value)
            
        <tr>
            <th scope="row">{{$value->id}} </th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->msg}}</td>
            <td><a href="{{ route('messagerie.show', $value->id) }}" class="btn btn-warning"> Show</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
    
    
    
    
    
    


        
        
        
        
        
        
        
        
    
        
        
        
        
        
        
        
    </div>
    @endsection
