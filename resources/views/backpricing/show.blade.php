@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show Pricing</h1>
    </div>

    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:200px;">
        <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin:30px;">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table text-center">
                    <div class="table-head">
                        <h2>{{$pricing->pack}} </h2>
                        <h1>{{$pricing->prix}}<span>{{$pricing->month}}</span></h1>
                    </div>
                    <div class="table-body">
                        <ul>
                            <li>{{$pricing->li1}}</li>
                            <li>{{$pricing->li2}}</li>
                            <li>{{$pricing->li3}}</li>
                            <li>{{$pricing->li4}}</li>
                        </ul>
                        <a href="/register">{{$pricing->btn}}</a>
                    </div>
                </div>
            </div>
                    <form action="{{route('pricing.destroy',$pricing->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
                            <a href="{{ route('pricing.edit',$pricing->id) }}" class="btn btn-warning"> Edit</a>
                        </div>
                    </form>

    </div>
@endsection