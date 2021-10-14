@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Create Slider</h1>
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
    <form action="{{ route('slider.store') }}" style="margin-left:50px" method="post" enctype="multipart/form-data">
    
    @csrf
        <div class="mb-3">
          <label  class="form-label">Image</label>
          <input type="file" class="form-control" style="width: 25%" name="img" value="{{ old('imagefond')  }}" >
          
        </div> 
        <div class="mb-3">
          <label  class="form-label">Titre</label>
          <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ old('titre')  }}">
          
        </div>
        <div class="mb-3">
          <label  class="form-label">Paragraphe</label>
          <input type="text" class="form-control" style="width: 25%" name="paragraphe" value="{{ old('paragraphe')  }}">
          
        </div>
        <div class="mb-3">
            <label  class="form-label">Mini Titre</label>
            <input type="text" class="form-control" style="width: 25%" name="minititre" value="{{  old('minititre')  }}">
            
          </div>
          <div class="mb-3">
            <label  class="form-label">Boutton read more</label>
            <input type="text" class="form-control" style="width: 25%" name="btnreadmore" value="{{  old('btnreadmore')  }}">
            
          </div>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
      


    
    </form>
        
    </div>
@endsection