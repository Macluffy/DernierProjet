<!-- About Start -->
<section class="about-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <h2>{{$about[0]->titre}} </h2>
                    <p class="m-0">{{$about[0]->paragraphe1}}</p>
                    <p> {{$about[0]->paragraphe2}}</p>
                    <a class="banner-btn" href="about-us.html" data-text="read more"><span>{{$about[0]->btn}}</span></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-video active">
                    <div class="game">
                        <a href="#"><img src="{{ asset('img/about/'.$about[0]->image) }}" alt="about"></a>
                    </div> 
                    <div class="video-icon video-hover">
                        <a class="video-popup" href="{{$about[0]->video}}">
                            <i class="zmdi zmdi-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome End -->
