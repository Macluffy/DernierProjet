@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Map[0]s</h1>
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
    <form action="{{ route('map.update',$map[0]->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="mb-3">
          <label  class="form-label">Voie</label>
          <input type="text" class="form-control" style="width: 25%" name="voie" value="{{ $map[0]->voie  }}" >
          
        </div> 
        <div class="mb-3">
          <label  class="form-label">Nom de voie</label>
          <input type="text" class="form-control" style="width: 25%" name="nom" value="{{ $map[0]->nom  }}">
          
        </div>
        <div class="mb-3">
          <label  class="form-label">Numero de rue</label>
          <input type="number" min="1"  class="form-control" style="width: 25%" name="numero" value="{{ $map[0]->numero }}">
          
      </div>

      <div class="mb-3">
          <label  class="form-label">Ville</label>
          <input type="text" class="form-control" style="width: 25%" name="ville" value="{{ $map[0]->ville }}">
          
      </div>
        
          
        
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection