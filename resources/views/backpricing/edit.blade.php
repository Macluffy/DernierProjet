@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Pricing</h1>
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
    <form action="{{ route('pricing.update',$pricing->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label  class="form-label">Pack Name</label>
      <input type="text" class="form-control" style="width: 25%" name="pack" value="{{ $pricing->pack  }}">
      
    </div>
    <div class="mb-3">
      <label  class="form-label">prix</label>
      <input type="text" class="form-control" style="width: 25%" name="prix" value="{{ $pricing->prix  }}">
      
    </div>
    <div class="mb-3">
        <label  class="form-label">mois</label>
        <input type="text" class="form-control" style="width: 25%" name="month" value="{{ $pricing->month }}">
        
      </div>
      <div class="mb-3">
        <label  class="form-label">description 1</label>
        <input type="text" class="form-control" style="width: 25%" name="li1" value="{{ $pricing->li1  }}">
        
      </div>
      <div class="mb-3">
        <label  class="form-label">description 2</label>
        <input type="text" class="form-control" style="width: 25%" name="li2" value="{{ $pricing->li2  }}">
        
      </div>
      <div class="mb-3">
        <label  class="form-label">description 3</label>
        <input type="text" class="form-control" style="width: 25%" name="li3" value="{{ $pricing->li3  }}">
        
      </div>
      <div class="mb-3">
        <label  class="form-label">description 4</label>
        <input type="text" class="form-control" style="width: 25%" name="li4" value="{{ $pricing->li4  }}">
        
      </div>
      <div class="mb-3">
        <label  class="form-label">boutton</label>
        <input type="text" class="form-control" style="width: 25%" name="btn" value="{{ $pricing->btn  }}">
        
      </div>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection