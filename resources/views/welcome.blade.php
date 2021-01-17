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
                            <a href="https://www.instagram.com/fanar.turk/" class="ml-4 d-none d-lg-inline" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-instagram text-26 text-primary" ></i>                      
                            </a>
                            <a href="https://www.facebook.com/fanarturk" class="ml-4 d-none d-lg-inline" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-twitter-square text-26 text-primary" ></i>                      
                            </a>
                            <a href="https://www.facebook.com/fanarturk" class="ml-4 d-none d-lg-inline" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-linkedin-square text-26 text-primary" ></i>                      
                            </a>
                            <a href="https://www.facebook.com/fanarturk" class="ml-4 d-none d-lg-inline" target="_blank" rel="noopener noreferrer">
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
                    <div class="col-12 px-0 d-flex flex-column flex-lg-row align-self-center">
                        <div class="col-12 col-lg-6 px-0 p{{ App::getLocale() == 'ar'? 'l' : 'r' }}-lg-5">
                            <img src="/heror-img.png" class="d-block mx-auto mx-lg-0 img-responsive mb-4 pt-4" style="max-width: 100%" alt="Hero image">
                            <h1 class="h2 d-block d-lg-none text-center text-lg-{{ App::getLocale() == 'ar'? 'right' : 'left' }} font-weight-bold mt-4 text-dark">{{ __('ui.hero-h1') }}</h1>
                            <h1 class="display-4 d-none d-lg-block text-center text-lg-{{ App::getLocale() == 'ar'? 'right' : 'left' }} font-weight-bold mt-4 text-dark">{{ __('ui.hero-h1') }}</h1>
                            <p class="text-16 d-block d-lg-none text-center text-secondary">{{ __('ui.hero-p') }}</p>
                            <p class="text-18 d-none d-lg-block d-xl-none text-secondary">{{ __('ui.hero-p') }}</p>
                            <p class="text-24 d-none d-xl-block text-{{ App::getLocale() == 'ar'? 'right' : 'left' }} text-secondary">{{ __('ui.hero-p') }}</p>
                            <p class="text-24 text-center text-lg-{{ App::getLocale() == 'ar'? 'right' : 'left' }}" style="font-family: 'Caveat', cursive;">{{ __('ui.fanarteam') }}</p>
                        </div>

                        <div class="col-12 mt-5 mb-3 d-lg-none">
                            <h2 class="h2">Complete the form below.</h2>
                        </div>
                        <div class="col-12 col-lg-6 px-0 mb-4 h-lg-100 d-flex flex-row align-self-center  text-{{ App::getLocale() == 'ar'? 'right' : 'left' }} p{{ App::getLocale() == 'ar'? 'r' : 'l' }}-lg-5">
                            <form class="col-12">
                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="insuranceStart" class="text-primary">{{ __('ui.insurance-start-date') }}</label>
                                      <input type="date" class="form-control rounded-0 form-control-lg" id="insuranceStart">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="dateOfBirth" class="text-primary">{{ __('ui.date-of-birth') }}</label>
                                      <input type="date" class="form-control rounded-0 form-control-lg" id="dateOfBirth">
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="passport" class="text-primary">{{ __('ui.passport-copy') }}</label>
                                      <input type="file" class="d-none" id="passport">
                                      <div class="form-control d-flex flex-row align-items-center rounded-0 form-control-lg" onclick="document.getElementById('passport').click()">
                                        <i class="fa fa-paperclip text-18"></i>
                                        <span class="text-16 ml-2">Browse</span>
                                      </div>                                      
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="address" class="text-primary">{{ __('ui.address') }}</label>
                                      <input type="file" class="d-none" id="address">
                                      <div class="form-control d-flex flex-row align-items-center rounded-0 form-control-lg" onclick="document.getElementById('address').click()">
                                        <i class="fa fa-paperclip text-18"></i>
                                        <span class="text-16 ml-2">Browse</span>
                                      </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="language" class="text-primary">{{ __('ui.prefered-language') }}</label>
                                      <select class="form-control rounded-0 form-control-lg">
                                        <option>English</option>
                                        <option>Turkish</option>
                                        <option>Arabic</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="coupon" class="text-primary">{{ __('ui.coupon') }}</label>
                                      <input type="text" class="form-control rounded-0 form-control-lg" id="coupon" placeholder="Discount coupon">
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-lg-row">
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="phone" class="text-primary">{{ __('ui.phone') }}</label>
                                      <input type="text" class="form-control rounded-0 form-control-lg" id="phone" placeholder="Phone number">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mb-3 px-0 px-lg-2">
                                      <label for="receipt" class="text-primary">{{ __('ui.receipt') }}</label>
                                      <input type="file" class="d-none" id="receipt">
                                      <div class="form-control d-flex flex-row align-items-center rounded-0 form-control-lg" onclick="document.getElementById('receipt').click()">
                                        <i class="fa fa-paperclip text-18"></i>
                                        <span class="text-16 ml-2">Browse</span>
                                      </div>                                     
                                    </div>
                                </div>

                                <div class="col-12 px-0 px-lg-2">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg py-lg-3">{{ __('ui.apply') }}</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
                
            </main>
            

            <footer>
         
            </footer>
        </div>
        <script src="/js/app.js"></script>
        <script>
            resizeWindow()
            window.onresize = function(){
                resizeWindow()
            }

            function resizeWindow(){
                
                if (window.innerWidth > 768) {
                    document.getElementById('main-container').style.height = window.innerHeight - 85 + 'px';
                }else{
                    document.getElementById('main-container').style.height = '';
                }
            }
        </script>
    </body>
</html>
