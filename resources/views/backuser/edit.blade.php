@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit User</h1>
    </div>
    @if ($errors->any())
<div class="alert alert-danger" >
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    
</div>
@endif
    <form action="{{ route('/userupdate',$user->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" style="width: 25%" name="name" value="{{ $user->name }}">
      
    </div>
    <div class="mb-3">
      <label  class="form-label">Email</label>
      <input type="text" class="form-control" style="width: 25%" name="email" value="{{  $user->email  }}">
      
    </div>
    <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="text" class="form-control" style="width: 25%" name="password" value="{{ $user->password }}">
        
      </div>
      
      <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="role_id">
        <option  selected>Role</option>

            <option value="{{1}} ">Admin</option>
            <option value="{{2}} ">Manager</option>
            <option value="{{3}} ">Coach</option>
            <option value="{{4}} ">Current user </option>

    </select>

    <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="abo">
      <option  selected>Abonement</option>

          <option value="silver ">silver</option>
          <option value="gold ">gold</option>
          <option value="platinium ">platinium</option>

  </select>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection