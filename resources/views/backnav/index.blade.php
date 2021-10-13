@extends('template/welcomeback')
@section('content')
<div >
    <div>
        <h1 class="text-center" style="margin-bottom:40px">Backoffice || index Navbar</h1>
    </div>

    <div class="container">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
            
        @endif
    </div>
    
        <header class="top container" style="background-color: rgb(255, 247, 231);   ">
            <div class="header-area ptb-18 header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <div class="logo">
                                <a href=""><img src="{{ $nav[0]->logo }}" alt="COFFEE" /></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-center">
                                    <nav>
                                        <ul>
                                            <li><a href="">{{ $nav[0]->link1 }}</a></li>
                                            <li><a href="">{{ $nav[0]->link2 }}</a></li>
                                            <li><a href="">{{ $nav[0]->link3 }}</a></li>
                                            <li><a href="">{{ $nav[0]->link4 }}</a></li>
                                            <li><a href="">{{ $nav[0]->link5 }}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
        <div style="display:flex; justify-content:center; width:100%; margin:30px;">
            <a href="{{ route('navbar.edit',$nav[0]->id) }}" class="btn btn-success"> Edit</a>
        </div>
    </div>
@endsection