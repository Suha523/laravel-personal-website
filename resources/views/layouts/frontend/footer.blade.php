<footer>
    <div class="wrapper-content p-5 bg-dark">

        <div class="row">
            <div class="col-lg-4 mb-5">
                <h3 class="text-warning text-center mb-5">{{ trans('website/footer.connect') }}</h3>
                <div class="d-flex text-center">
                    <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/suha.shehadah/">
                        <span
                            class="circle bg-footer rounded-circle d-flex
                        justify-content-center align-items-center mr-3">
                            <i style="font-size:20px;" class="fa-brands fa-facebook-f text-dark"></i>
                        </span>
                    </a>
                    <a class="text-decoration-none" target="_blank" href="https://www.linkedin.com/in/suha-shehadeh-02a9471a5/">
                        <span
                            class="circle bg-footer rounded-circle d-flex
                            justify-content-center align-items-center mr-3">
                            <i style="font-size:20px;" class="fa-brands fa-linkedin-in text-dark"></i>
                        </span>
                    </a>
                    <a class="text-decoration-none" target="_blank" href="https://github.com/Suha523">
                        <span
                            class="circle bg-footer rounded-circle d-flex
                                justify-content-center align-items-center mr-3">
                            <i style="font-size:20px;" class="fa-brands fa-github text-dark"></i>
                        </span>
                    </a>
                    <a class="text-decoration-none" target="_blank" href="https://www.youtube.com/channel/UCQAZ928zqV3HXfNv53HCHEA">
                        <span
                            class="circle bg-footer rounded-circle d-flex
                                    justify-content-center align-items-center mr-3">
                            <i style="font-size:20px;" class="fa-brands fa-youtube text-dark"></i>
                        </span>
                    </a>
                </div>


            </div>
            <div class="col-lg-4 mb-5">
                <h3 class="text-warning text-center mb-5">{{ trans('website/services.services') }}</h3>
                <ul class="list-unstyled" id="footer-services">
                    {{-- <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                              <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                              <h4 class="text-footer d-inline-block">web application developing</h4>
                            @else
                            <h4 class="text-footer d-inline-block">web application developing</h4>
                              <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                              <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                              <h4 class="text-footer d-inline-block">websites developing</h4>
                            @else
                            <h4 class="text-footer d-inline-block">websites developing</h4>
                              <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif

                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                              <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                              <h4 class="text-footer d-inline-block">web design</h4>
                            @else
                            <h4 class="text-footer d-inline-block">web design</h4>
                              <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif

                        </a>
                    </li> --}}

                </ul>
            </div>
            <div class="col-lg-4 mb-5">
                <h3 class="text-warning text-center mb-5">{{ trans('website/footer.links') }}</h3>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                            <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                            <h4 class="text-footer d-inline-block">Home</h4>
                          @else
                          <h4 class="text-footer d-inline-block">الرئيسة</h4>
                          <i class="fa-solid fa-angle-left text-footer ml-2"></i>

                          @endif

                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                            <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                            <h4 class="text-footer d-inline-block">About</h4>
                            @else
                            <h4 class="text-footer d-inline-block">من أنا</h4>
                            <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif

                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                            <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                            <h4 class="text-footer d-inline-block">Skills</h4>
                            @else
                            <h4 class="text-footer d-inline-block">المهارات</h4>
                            <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif

                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                            <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                            <h4 class="text-footer d-inline-block">Portfolio</h4>
                            @else
                            <h4 class="text-footer d-inline-block">أعمالي</h4>
                            <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif

                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                            <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                            <h4 class="text-footer d-inline-block">Services</h4>
                            @else
                            <h4 class="text-footer d-inline-block">الخدمات</h4>
                            <i class="fa-solid fa-angle-left text-footer ml-2"></i>

                            @endif

                        </a>
                    </li>

                </ul>
            </div>
            {{-- <div class="col-lg-3 mb-5">
                <h3 class="text-warning text-center">{{ trans('website/contact.contact') }}</h3>
                <ul class="list-unstyled">

                    <li class="mb-3">

                       <a href="mailto:suhashehadeh123@gmail.com"
                       class=" text-decoration-none">
                           <p class="mt-1 text-center text-footer">suhashehadeh123@gmail.com</p>
                        </a>
                    </li>


                </ul>
            </div> --}}

        </div>
    </div>
</footer>
