@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Newslater</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    
    
    <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:300px;">
        <div class="container">
            <div class="row">
                <div class="newsletter-wrapper fix">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="newsletter-content section-title text-center">
                            <h2>{{$newslater[0]->titre}} </h2> 
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
        
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            
            <a href="{{ route('newslater.edit',$newslater[0]->id) }}" class="btn btn-warning"> Edit</a>
        </div>
        
    </div>
    
    
    
    
    
</div>
@endsection
