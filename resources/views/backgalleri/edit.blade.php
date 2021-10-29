@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Gallery</h1>
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
    <form action="{{ route('gallery.update',$gallery->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
        
      
          
        
        <div class="mb-3">
          <label  class="form-label">Image 1</label>
          <input type="file" class="form-control" style="width: 25%" name="img1" value="{{  $gallery->img1  }}" >
          
        </div> 
        
        <div class="mb-3">
            <label  class="form-label">Image 2</label>
            <input type="file" class="form-control" style="width: 25%" name="img2" value="{{  $gallery->img2  }}">
            
          </div>
    
          <div class="mb-3">
            <label  class="form-label">Icon</label>
            <input type="text" class="form-control" style="width: 25%" name="icon" value="{{  $gallery->icon  }}">
            
          </div>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection