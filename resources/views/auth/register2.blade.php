<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <h1 style="width:100%; text-align:center;font-size:30px;font-weight:bolder;">Abonnement Gold</h1>
        <div class="d-flex align-items-center">

            <div class="container d-flex justify-content-center mt-5 mb-5">
                <div class="row g-3">
                    <div class="col-md-6"> <span>Payment Method</span>
                        <div class="card">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header p-0" id="headingTwo">
                                        <h2 class="mb-0"> <button
                                                class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                                type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span>Bancontact</span> <img src="{{ asset('img/payement/bctc.png') }}"
                                                        width="30"> </div>
                                            </button> </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body"> <input type="text" class="form-control"
                                                placeholder="bancontact"> </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0">
                                        <h2 class="mb-0"> <button
                                                class="btn btn-light btn-block text-left p-3 rounded-0"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <div class="d-flex align-items-center justify-content-between"> <span>Credit
                                                        card</span>
                                                    <div class="icons">
                                                        
                                                    <img
                                                            src="{{ asset('img/payement/paypale.webp') }}" width="30"> <img
                                                            src="{{ asset('img/payement/visa.png') }}" width="30"> <img
                                                            src="{{ asset('img/payement/stripe.png') }}" width="30"> <img
                                                            src="{{ asset('img/payement/mastercard.png') }}" width="30"> </div>
                                                </div>
                                            </button> </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body payment-card-body"> <span
                                                class="font-weight-normal card-text">Card Number</span>
                                            <div class="input"> <i class="fa fa-credit-card"></i> <input
                                                    type="text" class="form-control" placeholder="0000 0000 0000 0000">
                                            </div>
                                            <div class="row mt-3 mb-3">
                                                <div class="col-md-6"> <span
                                                        class="font-weight-normal card-text">Expiry Date</span>
                                                    <div class="input"> <i class="fa fa-calendar"></i> <input
                                                            type="text" class="form-control" placeholder="MM/YY"> </div>
                                                </div>
                                                <div class="col-md-6"> <span
                                                        class="font-weight-normal card-text">CVC/CVV</span>
                                                    <div class="input"> <i class="fa fa-lock"></i> <input
                                                            type="text" class="form-control" placeholder="000"> </div>
                                                </div>
                                            </div> <span class="text-muted certificate-text"><i class="fa fa-lock"></i>
                                                Your transaction is secured with ssl certificate</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-md-6"> <span>Summary</span>
                        <div class="card">
                            <div class="d-flex justify-content-between p-5">
                                <div class="d-flex flex-column"> <span>Abonnement Gold<i
                                            class="fa fa-caret-down"></i></span></div>
                                <div class="mt-3"> <sup class="super-price">$50</sup> <span
                                        class="super-month">/Month</span> </div>
                            </div>
                            <hr class="mt-0 line">
                            <div class="p-3 d-flex justify-content-between">
                                <div class="d-flex flex-column"> <span>Total price you pay (US Dollars)</span>
                                    <small>$50</small> </div> <span>$50</span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register2') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
