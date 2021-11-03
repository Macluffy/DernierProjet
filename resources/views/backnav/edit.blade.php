@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Navbar</h1>
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
    <form action="{{ route('navbar.update',$navbar->id) }}" style="margin-left:50px" method="post" enctype="multipart/form-data" >
    @method('put')
    @csrf
        <div class="mb-3">
          <label  class="form-label">Logo</label>
          <input type="file" class="form-control" style="width: 25%" name="logo" value="{{ $navbar->logo  }}" >
          
        </div> 
        <div class="mb-3">
            <label  class="form-label">Link 1</label>
            <input type="text" class="form-control" style="width: 25%" name="link1" value="{{ $navbar->link1  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Link 2</label>
            <input type="text" class="form-control" style="width: 25%" name="link2" value="{{ $navbar->link2  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Link 3</label>
            <input type="text" class="form-control" style="width: 25%" name="link3" value="{{ $navbar->link3  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Link 4</label>
            <input type="text" class="form-control" style="width: 25%" name="link4" value="{{ $navbar->link4  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Link 5</label>
            <input type="text" class="form-control" style="width: 25%" name="link5" value="{{ $navbar->link5  }}">
            
          </div>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
      


    
    </form>
        
    </div>
@endsection