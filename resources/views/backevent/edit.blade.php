@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Event</h1>
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
    <form action="{{ route('event.update',$event->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="mb-3">
          <label  class="form-label">Titre</label>
          <input type="text" class="form-control" style="width: 25%" name="titre" value="{{ $event->titre  }}" >
          
        </div> 
        <div class="mb-3">
          <label  class="form-label">Paragraphe</label>
          <input type="text" class="form-control" style="width: 25%" name="paragraphe" value="{{ $event->paragraphe  }}">
          
        </div>
        <div class="mb-3">
          <label  class="form-label">Date</label>
          <input type="text" class="form-control" style="width: 25%" name="date" value="{{ $event->date  }}">
          
        </div>
        <div class="mb-3">
            <label  class="form-label">Heure</label>
            <input type="text" class="form-control" style="width: 25%" name="heure" value="{{ $event->heure  }}">
            
          </div>

          <div class="form-check">
            <input class="form-check-input" name="order" type="checkbox" value={{1}} id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            first event
          </label>
        </div>
          
          <div style="margin-top:30px; margin-left:120px">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        
    </form>
        
    </div>
@endsection