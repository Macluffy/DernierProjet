<!-- Start of Map Area -->
<div class="map-area">
    <!-- google-map-area start -->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
            
            <iframe width="100%" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=1920&amp;height=380&amp;hl=en&amp;q={{$map[0]->voie}}%20{{$map[0]->nom}}%20{{$map[0]->numero}}%20{{$map[0]->ville}}+(handstand)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://mapswebsite.net/fr'>mapswebsite.net/fr</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=da742cedf02635646206bf9988d1881bdace4c4a'></script>

        </div>
    </div>
</div>
<!-- End of Map Area -->
<!-- Newsletter Area Start -->
<section class="newsletter-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="newsletter-wrapper fix">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="newsletter-content section-title text-center">
                        <h2>{{$newslater[0]->titre}}</h2> 
                        <div class="newsletter-form">
                            <form action="#" id="mc-form" class="mc-form fix">
                                <input id="mc-email" type="email" name="email" placeholder="Enter Your E-mail ID">
                                <button id="mc-submit" type="submit" class="default-btn" data-text="submit"><span>{{$newslater[0]->btn}}</span></button> 
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</section>
<!-- Newsletter Area End -->