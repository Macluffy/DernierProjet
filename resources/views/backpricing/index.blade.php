@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Pricing</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <div>
        <a href="{{ route('pricing.create') }}" class="btn btn-primary"> create</a>
    </div>
    
    @foreach ($pricing as $value)
    
    
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-table text-center">
                <div class="table-head">
                    <h2>{{$value->pack}} </h2>
                    <h1>{{$value->prix}}<span>{{$value->month}}</span></h1>
                </div>
                <div class="table-body">
                    <ul>
                        <li>{{$value->li1}}</li>
                        <li>{{$value->li2}}</li>
                        <li>{{$value->li3}}</li>
                        <li>{{$value->li4}}</li>
                    </ul>
                    <a href="/register">{{$value->btn}}</a>
                </div>
            </div>
        </div>


        
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('pricing.show', $value->id) }}" class="btn btn-warning"> Show</a>
        </div>
        
        
        
        
        
        
    </div>    
        @endforeach
        
        
        
        
        
        
    </div>
    @endsection
