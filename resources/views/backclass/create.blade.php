@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Create classe</h1>
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
    <form action="{{ route('classe.store') }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
        
        @csrf
        <div class="mb-3">
            <label  class="form-label">Image</label>
            <input type="file" class="form-control" style="width: 25%" name="img" value="{{ old('image ') }}" >
            
        </div> 
        <div class="mb-3">
            <label  class="form-label">Titre</label>
            <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ old('titre')  }}">
            
        </div>
        <div class="mb-3">
            <label  class="form-label">Nom</label>
            <input type="text" class="form-control" style="width: 25%" name="nom" value="{{ old('nom') }}">
            
        </div>
        <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="horraire_id">
            <option  selected>Horraire</option>
            
                <option value="{{1}} ">8.00 Am-12.00Am</option>
                <option value="{{2}} ">12.00 Am-3.00Pm</option>
                <option value="{{3}} ">3.00 Pm-6.00Pm</option>
                <option value="{{3}} ">6.00 Pm-9.00Pm</option>
            

          </select>
        
        <select class="form-select mb-3 " name="genre_id" style="width: 25%" aria-label="Default select example">
            <option  selected  >Choix du genre</option>
            <option value="{{1}}">Homme</option>
            <option value="{{2}}">Femme</option>
            <option value="{{3}}">Mixte</option>
        </select>

        
        
        <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        
    </form>
    
</div>
@endsection