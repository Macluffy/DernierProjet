@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Titre</h1>
    </div>

    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
            
        @endif
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Paragraphe</th>
                <th scope="col">Button</th>
            </tr>
        </thead>
        @foreach ($titre as $value)
        <tbody>
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->titre}} </td>
                <td>{{$value->paragraphe}}</td>
                <td>
                    <a href="{{route('titre.show',$value->id)}}" class="btn btn-warning">Show</a>
                </td>
            </tr>
        </tbody>
            @endforeach
            
            
    </table>

    </div>
@endsection