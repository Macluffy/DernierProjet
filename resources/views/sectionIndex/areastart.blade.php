<!-- Background Area Start -->
<div class="slider-area">	
    <div class="slider-wrapper">
        @foreach ($slider as $value)
           <div class="single-slide" style="background-image: url('{{ $value->imagefond }}');">
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                            <div class="text-content-wrapper">
                                <div class="text-content text-left">
                                    <h5>{{ $value->minititre }}</h5>
                                        <h1>{{ $titre[0]->titre }}<span></span><h1>
                                    <p>{{ $titre[0]->paragraphe }}</p>
                                    <a class="banner-btn" href="galleri" data-text="read more"><span>{{ $value->btnreadmore }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
        
    </div>
</div>
<!-- Background Area End -->