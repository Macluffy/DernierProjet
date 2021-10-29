@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Create Trainer</h1>
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
    <form action="{{ route('trainer.store') }}" style="margin-left:50px" method="post" enctype="multipart/form-data">
    
    @csrf
        <div class="mb-3">
          <label  class="form-label">Image</label>
          <input type="file" class="form-control" style="width: 25%" name="img" value="{{ old('image')  }}" >
        </div> 
        <div class="mb-3">
          <label  class="form-label">Titre</label>
          <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ old('titre')  }}">
          
        </div>
        <div class="mb-3">
          <label  class="form-label">Icon 1</label>
          <input type="text" class="form-control" style="width: 25%" name="icon1" value="{{ old('icon1')  }}">
          
        </div>
        <div class="mb-3">
          <label  class="form-label">lien 1</label>
          <input type="text" class="form-control" style="width: 25%" name="lien1" value="{{ old('lien1')  }}">
          
        </div>


        <div class="mb-3">
            <label  class="form-label">Icon 2</label>
            <input type="text" class="form-control" style="width: 25%" name="icon2" value="{{  old('icon2')  }}">
            
          </div>

          <div class="mb-3">
            <label  class="form-label">lien 2</label>
            <input type="text" class="form-control" style="width: 25%" name="lien2" value="{{  old('lien2')  }}">
            
          </div>


          <div class="mb-3">
            <label  class="form-label">Icon 3</label>
            <input type="text" class="form-control" style="width: 25%" name="icon3" value="{{  old('icon3')  }}">
            
          </div>

          <div class="mb-3">
            <label  class="form-label">lien 3</label>
            <input type="text" class="form-control" style="width: 25%" name="lien3" value="{{  old('lien3')  }}">
            
          </div>


          <div class="mb-3">
            <label  class="form-label">Icon 4</label>
            <input type="text" class="form-control" style="width: 25%" name="icon4" value="{{  old('icon4')  }}">
            
          </div>

          <div class="mb-3">
            <label  class="form-label">lien 4</label>
            <input type="text" class="form-control" style="width: 25%" name="lien4" value="{{  old('lien4')  }}">
            
          </div>

          <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="user_id">
            <option  selected>User</option>
                @foreach ($user as $value)
                    <option value="{{$value->id}} ">{{$value->name}}</option>
                @endforeach
                
                

        </select>
          
        
          
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
      


    
    </form>
        
    </div>
@endsection