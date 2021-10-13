<!-- Header Area Start -->
<header class="top">
    <div class="header-area ptb-18 header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-12">
                    <div class="logo">
                        <a href="/"><img src="{{ $nav[0]->logo }}" alt="COFFEE" /></a>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="content-wrapper">
                        <!-- Main Menu Start -->
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li><a href="/">{{ $nav[0]->link1 }}</a></li>
                                    <li><a href="about">{{ $nav[0]->link2 }}</a></li>
                                    <li><a href="class">{{ $nav[0]->link3 }}</a></li>
                                    <li><a href="galleri">{{ $nav[0]->link4 }}</a></li>
                                    <li><a href="contact">{{ $nav[0]->link5 }}</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md"></div>
                        <!-- Main Menu End -->
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="header-contact text-right">
                    
                       @auth
                       <a class="banner-btn" data-text="dashboard" href="{{ url('/dashboard') }}"><span>Dashboard</span></a>
                       @else
                       <a class="banner-btn" data-text="log in" href="{{ route('login') }}"><span>log in</span></a>
                        @endauth
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                    @else
                        <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>

                        
                    
                </div> --}}
            
            {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}