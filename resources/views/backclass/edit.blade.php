@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit classe</h1>
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
    <form action="{{ route('classe.update',$classe->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="mb-3">
          <label  class="form-label">Image</label>
          <input type="file" class="form-control" style="width: 25%" name="img" value="{{ $classe->image  }}" >
          
        </div> 
        <div class="mb-3">
          <label  class="form-label">Titre</label>
          <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ $classe->titre  }}">
          
        </div>
        <div class="mb-3">
          <label  class="form-label">Capaciter</label>
          <input type="number" max="20" class="form-control" style="width: 25%" name="quantiter" value="{{ $classe->quantiter }}">
          
      </div>
        
          <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="horraire_id">
            <option  selected>Horraire</option>
            
                <option value="{{1}} ">8.00 Am-12.00Am</option>
                <option value="{{2}} ">12.00 Am-3.00Pm</option>
                <option value="{{3}} ">3.00 Pm-6.00Pm</option>
                <option value="{{3}} ">6.00 Pm-9.00Pm</option>
          </select>

          <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="genre_id">
            <option  selected>Choix du genre</option>
            
                <option value="{{1}} ">Homme</option>
                <option value="{{2}} ">Femme</option>
                <option value="{{3}} ">Mixte</option>
            
          </select>

          <select class="form-select mb-3 " name="jour_id" style="width: 25%" aria-label="Default select example">
            <option  selected  >Choix du jour</option>
            <option value="{{1}}">Saturday</option>
            <option value="{{2}}">Sunday</option>
            <option value="{{3}}">Monday</option>
            <option value="{{1}}">Tuesday</option>
            <option value="{{2}}">Wednesday</option>
            <option value="{{3}}">Thursday</option>
            <option value="{{3}}">Friday</option>
        </select>

        @if ($classe->order == false)
          @if (count($classes1) <3)  
              <div class="form-check">
                  <input class="form-check-input" name="order" type="checkbox" value={{1}} id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                      Cours Prioritaires
                  </label>
              </div>
              @else
              <div>
                  <p>
                      - Vous ne pouvez pas definir un nouveau cours prioritaire car le maximum de cours prioritaire est deja atteint.
                  </p>
              </div>
              @endif  
        @else
        <div class="form-check">
          <input class="form-check-input" name="order" type="checkbox" value={{0}} id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
              Rendre ce cours non prioritaire.
          </label>
      </div>
                  
        @endif
        
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection