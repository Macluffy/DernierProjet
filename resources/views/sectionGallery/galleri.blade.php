<!-- Gallery Area Start -->
<section class="gallery-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                <div class="test-content">
                    <div class="section-title text-center">
                        <h2>our gallery</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="grid" style="position: relative; height: 390px;">
                @foreach ($galleri as $value)
                    <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 0%; top: 0px;">
                        <div class="portfolio-img single-img">
                            <img src="{{asset('img/portfolio/'.$value->img1)}}" alt="project">
                            <div class="gallery-icon">
                                <a class="image-popup" href="{{asset('img/portfolio/'.$value->img1)}}">
                                    <i class="{{$value->icon}}"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>    
<!-- Gallery Area End -->