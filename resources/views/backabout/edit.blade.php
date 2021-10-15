@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit About</h1>
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
    <form action="{{ route('about.update',$about->id) }}" style="margin-left:50px" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="mb-3">
          <label  class="form-label">Titre</label>
          <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ $about->titre  }}" >
          
        </div> 
        <div class="mb-3">
            <label  class="form-label">Paragraphe 1</label>
            <input type="text" class="form-control" style="width: 25%" name="paragraphe1" value="{{ $about->paragraphe1  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Paragraphe 2</label>
            <input type="text" class="form-control" style="width: 25%" name="paragraphe2" value="{{ $about->paragraphe2  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Boutton</label>
            <input type="text" class="form-control" style="width: 25%" name="btn" value="{{ $about->btn  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Image</label>
            <input type="file" class="form-control" style="width: 25%" name="img" value="{{ $about->image }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Video</label>
            <input type="link" class="form-control" style="width: 25%" name="video" value="{{ $about->video  }}">
            
          </div>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
      


    
    </form>
        
    </div>
@endsection