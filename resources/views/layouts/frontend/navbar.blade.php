<nav class="mynav text-white fixed-top navbar opacity-30 navbar-expand-lg navbar-dark w-100">
    <a class="navbar-brand ml-3" href="#">
        <span class="brand d-inline-block h-75 border border-warning text-warning p-1" >SSh</span>
        {{-- <img src="{{asset('asstes/img/favicon.png')}}" title="" alt=""> --}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse h-100" id="navbarSupportedContent">
      <ul class="@if (App::getLocale()=='ar')
      d-flex flex-column flex-row-reverse
      @endif navbar-nav ml-auto h-100">
        <li class="items nav-item h-100">
             <a class="nav-link"
             style="color: white;"
             onMouseOver="this.style.color='#f7d62d'"
             onMouseOut="this.style.color='#fff';"
             href="#home-section">
             @if (App::getLocale()=='en')
             <i class="fas fa-home mr-1"></i>
             {{ trans('website/navbar.home') }}
             @else
             {{ trans('website/navbar.home') }}
             <i class="fas fa-home mr-1"></i>
             @endif

            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"
             style="color: white;"
             onMouseOver="this.style.color='#f7d62d';"
             onMouseOut="this.style.color='#fff';"
             href="#about-section">
             @if (App::getLocale()=='en')
             <i class="fas fa-address-card mr-1"></i>
             {{ trans('website/navbar.about') }}
             @else
             {{ trans('website/navbar.about') }}
             <i class="fas fa-address-card mr-1"></i>
             @endif

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"
               style="color: white;"
               onMouseOver="this.style.color='#f7d62d';"
               onMouseOut="this.style.color='#fff';"
               href="#skills-section">
               @if (App::getLocale()=='en')
               <i class="fa fa-laptop-code mr-1"></i>
               {{ trans('website/navbar.skills') }}
               @else
               {{ trans('website/navbar.skills') }}
               <i class="fa fa-laptop-code mr-1"></i>
               @endif

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"
               style="color: white;"
               onMouseOver="this.style.color='#f7d62d';"
               onMouseOut="this.style.color='#fff';"
                href="#services-section">
               @if (App::getLocale()=='en')
               <i class="fa-solid fa-briefcase mr-1"></i>
               {{ trans('website/navbar.services') }}
               @else
               {{ trans('website/navbar.services') }}
               <i class="fa-solid fa-briefcase mr-1"></i>
               @endif

            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link"
               style="color: white;"
               onMouseOver="this.style.color='#f7d62d';"
               onMouseOut="this.style.color='#fff';"
               href="#portfolio-section">
               @if (App::getLocale()=='en')
               <i class="fas fa-tag mr-1"></i>
               {{ trans('website/navbar.portfolio') }}
               @else
               {{ trans('website/navbar.portfolio') }}
               <i class="fas fa-tag mr-1"></i>
               @endif

            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link"
               style="color: white;"
               onMouseOver="this.style.color='#f7d62d';"
               onMouseOut="this.style.color='#fff';"
               href="#contact-section">
               @if (App::getLocale()=='en')
               <i class="fas fa-phone mr-1"></i>
               {{ trans('website/navbar.contact') }}
               @else
               {{ trans('website/navbar.contact') }}
               <i class="fas fa-phone mr-1"></i>
               @endif

            </a>
          </li>
      </ul>
    </div>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 sm:block">
        @auth
            <a class="btn btn-warning ml-2 mr-2" href="{{ route('adminDashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a class="btn btn-warning ml-2 mr-2" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif --}}
        @endauth
    </div>
@endif
    <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            {{ LaravelLocalization::getCurrentLocaleName() }}

        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            @endforeach
        </div>
    </div>



  </nav>
