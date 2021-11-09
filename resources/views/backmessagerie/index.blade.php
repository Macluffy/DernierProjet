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
        @if ($value->couleur == 'true')
            <tr style="background-color:gray">

            <th scope="row">{{$value->id}} </th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->msg}}</td>
            <form action="{{ route('messagerie.update', $value->id) }}" method="post">

                @method('put')
                @csrf

                <td><button  class="btn btn-success" type="submit">Vue</button><a href="{{ route('messagerie.show', $value->id) }}" type="submit"  class="btn btn-warning bout"> Show</a></td>
            </form>
        </tr>
        @else
        <tr>

            <th scope="row">{{$value->id}} </th>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->msg}}</td>
            <form action="{{ route('messagerie.update',$value->id) }}" method="post">
                @method('put')
                @csrf
                <td><button  class="btn btn-success" type="submit">Vue</button><a href="{{ route('messagerie.show', $value->id) }}" type="submit"  class="btn btn-warning"> Show</a></td>
            </form>
        </tr>
        @endif

        @endforeach

    </tbody>
</table>

    
    
    
    
    
    


        
        
        
        
        
        
        
        
    
        
        
        
        
        
        
        
    </div>
    @endsection
