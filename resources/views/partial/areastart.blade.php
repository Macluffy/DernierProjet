<!-- Banner Area Start -->
@if(Request::url() === 'http://127.0.0.1:8000/galleri')
    <section class="banner-area text-left">	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h2>GALLERY </h2>
                        <div class="banner-breadcrumb">
                            <ul>
                                <li><a href="/">Home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</section>
@elseif(Request::url() === 'http://127.0.0.1:8000/about')
<section class="banner-area text-left">	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h2>ABOUT US </h2>
                        <div class="banner-breadcrumb">
                            <ul>
                                <li><a href="/">Home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</section>
@elseif(Request::url() === 'http://127.0.0.1:8000/class')
<section class="banner-area text-left">	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h2>CLASS </h2>
                        <div class="banner-breadcrumb">
                            <ul>
                                <li><a href="/">Home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>Class</li>
                            </ul>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</section>
@elseif(Request::url() === 'http://127.0.0.1:8000/contact')
<section class="banner-area text-left">	
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-content-wrapper">
                    <div class="banner-content">
                        <h2>CONTACT </h2>
                        <div class="banner-breadcrumb">
                            <ul>
                                <li><a href="/">Home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</section>

@endif

<!-- Banner Area End -->