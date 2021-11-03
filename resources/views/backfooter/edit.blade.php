@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || Edit Footer</h1>
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
<form action="{{ route('footer.update',$footer[0]->id) }}" style="margin-left:50px" method="post"  enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label  class="form-label">logo</label>
        <input type="file" class="form-control" style="width: 25%" name="logo" value="{{ $footer[0]->logo  }}" >
        
    </div> 
    <div class="mb-3">
        <label  class="form-label">p1</label>
        <input type="text" class="form-control" style="width: 25%" name="p1" value="{{ $footer[0]->p1  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">icon1</label>
        <input type="text" class="form-control" style="width: 25%" name="icon1" value="{{ $footer[0]->icon1  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">p2</label>
        <input type="text" class="form-control" style="width: 25%" name="p2" value="{{ $footer[0]->p2  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">icon2</label>
        <input type="text" class="form-control" style="width: 25%" name="icon2" value="{{ $footer[0]->icon2  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">p3</label>
        <input type="text" class="form-control" style="width: 25%" name="p3" value="{{ $footer[0]->p3  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">icon3</label>
        <input type="text" class="form-control" style="width: 25%" name="icon3" value="{{ $footer[0]->icon3  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">p4</label>
        <input type="text" class="form-control" style="width: 25%" name="p4" value="{{ $footer[0]->p4  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">titre1</label>
        <input type="text" class="form-control" style="width: 25%" name="titre1" value="{{ $footer[0]->titre1  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">icon4</label>
        <input type="text" class="form-control" style="width: 25%" name="icon4" value="{{ $footer[0]->icon4  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">p5</label>
        <input type="text" class="form-control" style="width: 25%" name="p5" value="{{ $footer[0]->p5  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">link1</label>
        <input type="text" class="form-control" style="width: 25%" name="link1" value="{{ $footer[0]->link1  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">contenu1</label>
        <input type="text" class="form-control" style="width: 25%" name="contenu1" value="{{ $footer[0]->contenu1  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">icon5</label>
        <input type="text" class="form-control" style="width: 25%" name="icon5" value="{{ $footer[0]->icon5  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">p6</label>
        <input type="text" class="form-control" style="width: 25%" name="p6" value="{{ $footer[0]->p6  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">link2</label>
        <input type="text" class="form-control" style="width: 25%" name="link2" value="{{ $footer[0]->link2  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">contenu2</label>
        <input type="text" class="form-control" style="width: 25%" name="contenu2" value="{{ $footer[0]->contenu2  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">titre2</label>
        <input type="text" class="form-control" style="width: 25%" name="titre2" value="{{ $footer[0]->titre2  }}">
        
    </div>

    <div class="mb-3">
        <label  class="form-label">btn</label>
        <input type="text" class="form-control" style="width: 25%" name="btn" value="{{ $footer[0]->btn  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">span1</label>
        <input type="text" class="form-control" style="width: 25%" name="span1" value="{{ $footer[0]->span1  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">span2</label>
        <input type="text" class="form-control" style="width: 25%" name="span2" value="{{ $footer[0]->span2  }}">
        
    </div>
    <div class="mb-3">
        <label  class="form-label">span3</label>
        <input type="text" class="form-control" style="width: 25%" name="span3" value="{{ $footer[0]->span3  }}">
        
    </div>
    
    
    
    
    <div style="margin-top:30px; margin-left:120px">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    
</form>

</div>
@endsection