@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center m-5" style="margin-bottom:40px">Backoffice || index User</h1>
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
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            <th scope="col">Abonement</th>
            <th scope="col">boutton</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $value)
            
        <tr>
            <th scope="row">{{$value->id}} </th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->password}}</td>
            <td>{{$value->role_id}}</td>
            <td>{{$value->abo}}</td>
            <td><a href="{{ route('/usershow',$value->id) }}" class="btn btn-warning"> Show</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
    
    
    
    
    
    


        
        
        
        
        
        
        
        
    
        
        
        
        
        
        
        
    </div>
    @endsection
