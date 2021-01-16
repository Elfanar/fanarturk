<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ App::getLocale() == 'ar'? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sales FanaTurk</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container-fluid p-0 m-0 h-100 bg-white">
            <header class="border-bottom">
                <div class="container mb-0">
                    <div class="d-flex flex-row py-3 align-items-center">
                        <img src="/logo.png" width="40" alt="Logo">
                        <span class=" {{ App::getLocale() == 'ar' ? 'mr-3'  : 'ml-3' }} font-weight-bold text-20">{{ __('ui.company') }}</span>

                        <div class="{{ App::getLocale() == 'ar' ? 'mr-auto'  : 'ml-auto' }} d-flex align-items-center">
                            <div class="dropdown d-inline bg-light border {{ App::getLocale() == 'ar' ? 'ml-3'  : '' }}">
                                <div class="btn btn-default dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if (App::getLocale() == 'ar')
                                        <img src="/ar.png" height="15" alt="">
                                    @elseif(App::getLocale() == 'tr')
                                        <img src="/tr.png" height="15" alt="">
                                    @elseif(App::getLocale() == 'en')
                                        <img src="/en.png" height="15" alt="">
                                    @endif
                                    <span class="{{ App::getLocale() == 'ar' ? 'mr-2'  : 'ml-2' }}">
                                        {{ __('ui.language') }}
                                    </span>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="{{ env('APP_URL') }}/en">
                                        <img src="/en.png" height="10" alt="">
                                        <div class="text-12 {{ App::getLocale() == 'ar' ? 'mr-2'  : 'ml-2' }}">English</div>                                    
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ env('APP_URL') }}/ar">
                                        <img src="/ar.png" height="10" alt="">
                                        <div class="text-12 {{ App::getLocale() == 'ar' ? 'mr-2'  : 'ml-2' }}">Arabic</div>                                    
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ env('APP_URL') }}/tr">
                                        <img src="/tr.png" height="10" alt="">
                                        <div class="text-12 {{ App::getLocale() == 'ar' ? 'mr-2'  : 'ml-2' }}">Türkçe</div>                                    
                                    </a>
                                </div>
                            </div>                                               
                            <a href="https://www.instagram.com/fanar.turk/" class="ml-4" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-instagram text-26 text-primary" ></i>                      
                            </a>
                            <a href="https://www.facebook.com/fanarturk" class="ml-4" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-twitter-square text-26 text-primary" ></i>                      
                            </a>
                            <a href="https://www.facebook.com/fanarturk" class="ml-4" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-linkedin text-26 text-primary" ></i>                      
                            </a>
                            <a href="https://www.facebook.com/fanarturk" class="ml-4" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-facebook-square text-26 text-primary" ></i>                      
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <main id="main-container">

                {{-- Set this container height to 100% then --}}
                <div class="container h-100 d-flex">
                    {{-- Algin this vertically centered --}}
                    <div class="w-100 d-flex flex-column flex-md-row align-self-center">
                        <div class="col-12 col-lg-6 px-0 p{{ App::getLocale() == 'ar'? 'l' : 'r' }}-5">
                            <img src="/heror-img.png" class="d-block mb-4" alt="Hero image">
                            <h1 class="display-4 text-{{ App::getLocale() == 'ar'? 'right' : 'left' }} font-weight-bold mt-4 text-dark">{{ __('ui.hero-h1') }}</h1>
                            <p class="text-24 text-{{ App::getLocale() == 'ar'? 'right' : 'left' }} text-secondary">{{ __('ui.hero-p') }}</p>
                            <p class="text-24 text-{{ App::getLocale() == 'ar'? 'right' : 'left' }}" style="font-family: 'Caveat', cursive;">{{ __('ui.fanarteam') }}</p>
                        </div>
                        <div class="col-12 col-lg-6 px-0 h-lg-100 d-flex flex-row align-self-center  text-{{ App::getLocale() == 'ar'? 'right' : 'left' }} p{{ App::getLocale() == 'ar'? 'r' : 'l' }}-5">

                            <form>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="insuranceStart">{{ __('ui.insurance-start-date') }}</label>
                                      <input type="date" class="form-control rounded-0 form-control-lg" id="insuranceStart">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="dateOfBirth">{{ __('ui.date-of-birth') }}</label>
                                      <input type="date" class="form-control rounded-0 form-control-lg" id="dateOfBirth">
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="passport">{{ __('ui.passport-copy') }}</label>
                                      <input type="file" class="form-control rounded-0 form-control-lg" id="passport">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="address">{{ __('ui.address') }}</label>
                                      <input type="file" class="form-control rounded-0 form-control-lg" id="address">
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="language">{{ __('ui.prefered-language') }}</label>
                                      <select class="form-control rounded-0 form-control-lg">
                                        <option>English</option>
                                        <option>Turkish</option>
                                        <option>Arabic</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="coupon">{{ __('ui.coupon') }}</label>
                                      <input type="text" class="form-control rounded-0 form-control-lg" id="coupon" placeholder="Discount coupon">
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="phone">{{ __('ui.phone') }}</label>
                                      <input type="text" class="form-control rounded-0 form-control-lg" id="phone" placeholder="Phone number">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3">
                                      <label for="receipt">{{ __('ui.receipt') }}</label>
                                      <input type="file" class="form-control rounded-0 form-control-lg" id="receipt">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg py-lg-3">{{ __('ui.apply') }}</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
                
            </main>
            
        </div>
        <script src="/js/app.js"></script>
        <script>
            document.getElementById('main-container').style.height = window.innerHeight - 85 + 'px';
        </script>
    </body>
</html>
