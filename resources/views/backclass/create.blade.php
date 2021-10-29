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
            <label  class="form-label">Capaciter</label>
            <input type="number" max="20" class="form-control" style="width: 25%" name="quantiter" value="{{ old('quantiter') }}">
            
        </div>
        
        
        <select class="form-select mb-3 " style="width: 25%" aria-label="Default select example" name="horraire_id">
            <option  selected>Horraire</option>

                <option value="{{1}} ">8.00</option>
                <option value="{{2}} ">12.00</option>
                <option value="{{3}} ">15.00</option>
                <option value="{{3}} ">18.00</option>

        </select>
        
        <select class="form-select mb-3 " name="genre_id" style="width: 25%" aria-label="Default select example">
            <option  selected  >Choix du genre</option>
            <option value="{{1}}">Homme</option>
            <option value="{{2}}">Femme</option>
            <option value="{{3}}">Mixte</option>
        </select>

        <select class="form-select mb-3 " name="jour_id" style="width: 25%" aria-label="Default select example">
            <option  selected  >Choix du jour</option>
            <option value="{{1}}">Saturday 23-10-21</option>
            <option value="{{2}}">Sunday 24-10-21</option>
            <option value="{{3}}">Monday 25-10-21</option>
            <option value="{{4}}">Tuesday 26-10-21</option>
            <option value="{{5}}">Wednesday 27-10-21</option>
            <option value="{{6}}">Thursday 28-10-21</option>
            <option value="{{7}}">Friday 29-10-21</option>
            <option value="{{8}}">Saturday 30-10-21</option>
            <option value="{{9}}">Sunday 31-10-21</option>
            <option value="{{10}}">Monday 01-11-21</option>
            <option value="{{11}}">Tuesday 02-11-21</option>
            <option value="{{12}}">Wednesday 03-11-21</option>
            <option value="{{13}}">Thursday 04-11-21</option>
            <option value="{{14}}">Friday 05-11-21</option>
            <option value="{{15}}">Saturday 06-11-21</option>
            <option value="{{16}}">Sunday 07-11-21</option>
            <option value="{{17}}">Monday 08-11-21</option>
            <option value="{{18}}">Tuesday 09-11-21</option>
            <option value="{{19}}">Wednesday 10-11-21</option>
            <option value="{{20}}">Thursday 11-11-21</option>
            <option value="{{21}}">Friday 12-11-21</option>
        </select>
        
        @if (count($classes) <3)
        <div class="form-check">
            <input class="form-check-input" name="order" type="checkbox" value={{1}} id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Cours Prioritaires
            </label>
        </div>
        @else
        <div>
            <p>
                - Vous ne pouvez pas definir un nouveau cours prioritaire car le maximum de cours prioritaire est deja atteint
            </p>
        </div>
        @endif  
        
        

        

        
        
        <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        
    </form>
    
</div>
@endsection