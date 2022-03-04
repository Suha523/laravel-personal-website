<div class="wrapper-content" id="about-section">

    <h2 class="text-center mt-5 mb-5 text-warning text-capitalize">{{ trans('website/about.about') }}</h2>

    <div class="container-fluid">
        <div class="row">
            @if (App::getLocale() == 'en')
                <div class="col-lg-4">
                    <img style="width:100%;height:100%;"
                        src="{{ asset('asstes/img/karl-pawlowicz-QUHuwyNgSA0-unsplash.jpg') }}">
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="text-left ml-4 mt-4 mb-4 badge badge-warning text-uppercase">
                                <i class="fa-solid fa-circle-info mr-1"></i>{{ trans('website/about.info') }}
                            </p>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fas fa-user text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.name') }}</b>: suha shehadeh
                                    </p>
                                </li>
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                            justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fas fa-birthday-cake text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.birthdate') }}</b>: march 26,
                                        1998</p>
                                </li>
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fas fa-map-marker-alt text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.address') }}</b>: nablus</p>
                                </li>
                                {{-- <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fas fa-phone text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.phone') }}</b>: 0595521651</p>
                                </li> --}}
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fas fa-envelope text-dark"></i>
                                    </span>
                                    <p class="mt-1 "><b
                                            class="text-capitalize">{{ trans('website/about.email') }}</b>:
                                        suhashehadeh123@gmail.com
                                    </p>
                                </li>


                            </ul>


                        </div>

                        <div class="col-lg-6">
                            <p class="text-left ml-4 mt-4 mb-4 badge badge-warning text-uppercase">
                                <i class="fa-solid fa-graduation-cap mr-1"></i>{{ trans('website/about.edu') }}
                            </p>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fa-solid fa-graduation-cap text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.degree') }}</b>: bachelor
                                    </p>
                                </li>
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                  justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fa-solid fa-graduation-cap text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.specialty') }}</b>: Computer Systems Engineering
                                        </p>
                                </li>
                                <li class="d-flex mb-3">
                                    <span
                                        class="circle bg-warning rounded-circle d-flex
                                             justify-content-center align-items-center mr-3">
                                        <i style="font-size:20px;" class="fa-solid fa-building-columns text-dark"></i>
                                    </span>
                                    <p class="mt-1 text-capitalize"><b>{{ trans('website/about.university') }}</b>: palestine technical university - khadoori</p>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <p class="text-left ml-4 mt-5 mb-3 badge badge-warning text-uppercase">
                        <i class="fa-solid fa-heart mr-1"></i>{{ trans('website/about.hobby') }}
                    </p>

                    <div class="d-flex flex-wrap">

                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <span class="line d-inline-block bg-warning mr-2"></span>
                            <span
                                class="circle bg-warning rounded-circle d-flex
                        justify-content-center align-items-center mr-2">
                                <i class="fas fa-video text-dark"></i>
                            </span>
                            <h6 class="text-capitalize">{{ trans('website/about.editVideos') }}</h6>

                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <span class="line d-inline-block bg-warning mr-2"></span>
                            <span
                                class="circle bg-warning rounded-circle d-flex
                            justify-content-center align-items-center mr-2"><i
                                    class="fas fa-book-open text-dark"></i></span>
                            <h6 class="text-capitalize ">{{ trans('website/about.reading') }}</h6>

                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <span class="line d-inline-block bg-warning mt-1 mr-2"></span>
                            <span
                                class="circle bg-warning rounded-circle d-flex
                            justify-content-center align-items-center mr-2">
                                <i class="fas fa-language text-dark"></i>
                            </span>
                            <h6 class="text-capitalize ">{{ trans('website/about.learnLanguages') }}</h6>

                        </div>

                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <span class="line d-inline-block bg-warning mr-2"></span>
                            <span
                                class="circle bg-warning rounded-circle d-flex
                            justify-content-center align-items-center mr-2"><i
                                    class="fa-solid fa-person-walking text-dark"></i></span>
                            <h6 class="text-capitalize ">{{ trans('website/about.walk') }}</h6>

                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <span class="line d-inline-block bg-warning mt-1 mr-2"></span>
                            <span
                                class="circle bg-warning rounded-circle d-flex
                            justify-content-center align-items-center mr-2">
                                <i class="fa-solid fa-person-walking text-dark"></i>
                            </span>
                            <h6 class="text-capitalize ">{{ trans('website/about.workout') }}</h6>

                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">


                            <span class="line d-inline-block bg-warning mr-2"></span>
                            <span
                                class="circle bg-warning rounded-circle d-flex
                        justify-content-center align-items-center mr-2"><i
                                    class="fa-solid fa-film text-dark"></i></span>

                            <h6 class="text-capitalize ">{{ trans('website/about.watch') }}</h6>
                        </div>

                    </div>
                </div>
            @else
                <div class="col-lg-8 mb-5">
                  <div class="row">
                    <div class="col-lg-6">
                        <p class="text-left ml-4 mt-4 mb-4 badge badge-warning text-uppercase">
                           {{ trans('website/about.edu') }} <i class="fa-solid fa-graduation-cap mr-1"></i>
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex flex-row-reverse mb-3">

                                <span
                                    class="circle bg-warning rounded-circle d-flex
                            justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fa-solid fa-graduation-cap text-dark"></i>
                                </span>
                                <p class="mt-1 text-capitalize"><b>{{ trans('website/about.degree') }}</b>: بكالوريوس
                                </p>

                            </li>
                            <li class="d-flex flex-row-reverse mb-3">

                                <span
                                    class="circle bg-warning rounded-circle d-flex
                              justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fa-solid fa-graduation-cap text-dark"></i>
                                </span>
                                <p class="mt-1 text-capitalize"><b>{{ trans('website/about.specialty') }}</b>: هندسة أنظمة الحاسوب
                                </p>

                            </li>
                            <li class="d-flex flex-row-reverse mb-3">

                                <span
                                    class="circle bg-warning rounded-circle d-flex
                                         justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fa-solid fa-building-columns text-dark"></i>
                                </span>
                                <p class="mt-1 text-capitalize"><b>{{ trans('website/about.university') }}</b>: جامعة فلسطين التقنية - خضوري</p>

                            </li>


                        </ul>
                    </div>
                      <div class="col-lg-6">
                        <p class="text-left ml-4 mt-4 mb-4 badge badge-warning text-uppercase">
                            {{ trans('website/about.info') }} <i class="fa-solid fa-circle-info"></i> </p>
                        <ul class="list-unstyled">
                            <li class="d-flex flex-row-reverse  mb-3">
                                <span
                                    class="circle bg-warning rounded-circle d-flex
                                     justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fas fa-user text-dark"></i>
                                </span>

                                <p class="mt-1 text-capitalize"><b>{{ trans('website/about.name') }}</b>: سهى شحادة </p>



                            </li>
                            <li class="d-flex flex-row-reverse  mb-3">

                                <span
                                    class="circle bg-warning rounded-circle d-flex
                                     justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fas fa-birthday-cake text-dark"></i>
                                </span>

                                <p class="mt-1 text-capitalize">march 26, 1998
                                    :<b>{{ trans('website/about.birthdate') }}</b></p>


                            </li>
                            <li class="d-flex flex-row-reverse  mb-3">

                                <span
                                    class="circle bg-warning rounded-circle d-flex
                                     justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fas fa-map-marker-alt text-dark"></i>
                                </span>

                                <p class="mt-1 text-capitalize"><b>{{ trans('website/about.address') }}</b>: نابلس </p>
                            </li>

                            <li class="d-flex flex-row-reverse  mb-3">

                                <span
                                    class="circle bg-warning rounded-circle d-flex
                                    justify-content-center align-items-center mr-3">
                                    <i style="font-size:20px;" class="fas fa-envelope text-dark"></i>
                                </span>

                                <p class="mt-1 "> suhashehadeh123@gmail.com: <b
                                        class="text-capitalize">{{ trans('website/about.email') }}</b></p>


                            </li>

                        </ul>
                      </div>

                  </div>


                    <p class="text-left ml-4 mt-5 mb-2 badge badge-warning text-uppercase">
                        {{ trans('website/about.hobby') }} <i class="fa-solid fa-heart"></i></p>

                    <div class="d-flex flex-row-reverse flex-wrap">
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <h6 class="text-capitalize">{{ trans('website/about.editVideos') }}</h6>

                            <span
                                class="circle bg-warning rounded-circle d-flex
                    justify-content-center align-items-center ml-2 mr-2">
                                <i class="fas fa-video text-dark"></i>
                            </span>
                            <span class="line d-inline-block bg-warning mt-1"></span>


                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <h6 class="text-capitalize ">{{ trans('website/about.reading') }}</h6>

                            <span
                                class="circle bg-warning rounded-circle d-flex
                    justify-content-center align-items-center ml-2 mr-2"><i
                                    class="fas fa-book-open text-dark"></i></span>
                            <span class="line d-inline-block bg-warning mt-1"></span>


                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <h6 class="text-capitalize ">{{ trans('website/about.learnLanguages') }}</h6>

                            <span
                                class="circle bg-warning rounded-circle d-flex
                    justify-content-center align-items-center ml-2 mr-2">
                                <i class="fas fa-language text-dark"></i>
                            </span>
                            <span class="line d-inline-block bg-warning mt-1"></span>


                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <h6 class="text-capitalize ">{{ trans('website/about.walk') }}</h6>


                            <span
                                class="circle bg-warning rounded-circle d-flex
                        justify-content-center align-items-center mr-2"><i
                                    class="fa-solid fa-person-walking text-dark"></i></span>
                            <span class="line d-inline-block bg-warning mr-2"></span>

                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <h6 class="text-capitalize ">{{ trans('website/about.workout') }}</h6>

                            <span
                                class="circle bg-warning rounded-circle d-flex
                        justify-content-center align-items-center mr-2">
                                <i class="fa-solid fa-person-walking text-dark"></i>
                            </span>
                            <span class="line d-inline-block bg-warning mt-1 mr-2"></span>


                        </div>
                        <div class="d-flex m-3 justify-content-center align-items-center">
                            <h6 class="text-capitalize ">{{ trans('website/about.watch') }}</h6>


                            <span
                                class="circle bg-warning rounded-circle d-flex
                        justify-content-center align-items-center mr-2"><i
                                    class="fa-solid fa-film text-dark"></i></span>
                            <span class="line d-inline-block bg-warning mr-2"></span>

                        </div>


                    </div>
                </div>
                <div class="col-lg-4">
                    <img style="width:100%;height:80%;"
                        src="{{ asset('asstes/img/karl-pawlowicz-QUHuwyNgSA0-unsplash.jpg') }}">
                </div>
            @endif


        </div>
    </div>
</div>
