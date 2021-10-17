@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Titre</h1>
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
<form action="{{ route('titre.update',$titre->id) }}" style="margin-left:50px" method="post">
    @method('put')
    @csrf
    <div class="mb-3">
        <label  class="form-label">Titre</label>
        <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ $titre->titre }}" >
        
    </div> 
    <div class="mb-3">
        <label  class="form-label">Paragraphe</label>
        <input type="text" class="form-control" style="width: 25%" name="paragraphe" value="{{ $titre->paragraphe }}">
        
    </div>
    <div style="margin-top:30px; margin-left:120px">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    
    
    
    
    
</form>
        
    </div>
@endsection