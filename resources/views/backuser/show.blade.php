@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Show User</h1>
    </div>

    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:200px;">
        <div class="messagerie-content text-center">
            <h3>{{$users->name}} </h3>
            <h4> {{$users->email}}</h4>
            <p>{{$users->password}}</p>
            <p>{{$users->role_id}}</p>
            <p>{{$users->abo}}</p>
            

            
        </div> 
                    <form action="{{route('/userdestroy',$users->id)}} " method="post">
                        @csrf
                        @method('DELETE')
                        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
                            <a href="{{ route('/useredit',$users->id) }}" class="btn btn-success"> Edit</a>
                            <button type="submit" class=" btn btn-danger" style="margin-right: 10px;">Delete</button>
                        </div>
    </form>

    </div>
@endsection