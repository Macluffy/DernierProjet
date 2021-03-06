@extends('template/welcomeback')
@section('content')
<div>
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Footer</h1>
    </div>
    
    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        
        @endif
    </div>
    <!-- Footer Area Start -->
    <footer class="footer-area bg-gray">
        <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
            <div class="container">
                <div class="row">  
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <a href="index.html"><img src="{{ asset('img/logo/'.$footer[0]->logo) }}" alt="handstand"></a>
                            <p>{{$footer[0]->p1}} </p>
                            <ul>
                                <li><i class="{{$footer[0]->icon1}}"></i> {{$footer[0]->p2}}</li>
                                <li><i class="{{$footer[0]->icon2}}"></i> {{$footer[0]->p3}}</li>
                                <li><i class="{{$footer[0]->icon3}}"></i> {{$footer[0]->p4}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <h3>{{$footer[0]->titre1}}</h3>
                            <div class="single-twitt mb-10">
                                <div class="twitt-icon">
                                    <i class="{{$footer[0]->icon4}}"></i>
                                </div>
                                <div class="twitt-content">
                                    <p>{{$footer[0]->p5}}</p>
                                    <a href="{{$footer[0]->link1}}">{{$footer[0]->contenu1}}</a>
                                </div>
                            </div>
                            <div class="single-twitt">
                                <div class="twitt-icon">
                                    <i class="{{$footer[0]->icon5}}"></i>
                                </div>
                                <div class="twitt-content">
                                    <p>{{$footer[0]->p6}}</p>
                                    <a href="{{$footer[0]->link2}}">{{$footer[0]->contenu2}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-footer-widget">
                            <h3>{{$footer[0]->titre2}}</h3>
                            <form id="subscribe-form" action="https://whizthemes.com/mail-php/other/mail.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Name" name="con_name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Email" name="con_email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea cols="30" rows="7" name="con_message" placeholder="subject"></textarea>
                                        <button type="submit">{{$footer[0]->btn}}</button>
                                        <p class="subscribe-message"></p>
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-text-area fix bg-coffee ptb-18">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-text text-center">
                            <span>{{$footer[0]->span1}} &copy; <a href="#">{{$footer[0]->span2}}</a> {{$footer[0]->span3}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    
    
    
    <div class="row" style="display:flex; flex-direction:column; align-items:center; justify-content:center; width:100%; margin-top:300px;">
        
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            
            <a href="{{ route('footer.edit',$footer[0]->id) }}" class="btn btn-warning"> Edit</a>
        </div>
        
    </div>
    
    
    
    
    
</div>
@endsection
