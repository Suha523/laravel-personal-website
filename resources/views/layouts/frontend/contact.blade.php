<div class="wrapper-content p-5" id="contact-section">
    <h2 class="text-capitalize text-warning text-center">{{ trans('website/contact.contact') }}</h2>
   <div class="row p-5">
       <div class="col-lg-8 mb-5">
       
        <form method="POST" action="{{route('contact-us.send_email')}}">
               @csrf
            <div class="row">
               <div class="col-lg-6">
                <div class="form-group">

                    <input name="name" type="text" class="form-control border border-warning" id="name" placeholder="Your Name">
                </div>
               </div>
               <div class="col-lg-6">
                <div class="form-group">

                    <input name="email" type="email" class="form-control border border-warning" id="email" placeholder="Your Email">
                </div>
               </div>
            </div>
            <div class="form-group">
                <input name="subject" type="text" class="form-control border border-warning" id="subject" placeholder="Subject">
            </div>

            <div class="form-group">
                <textarea name="message" class="form-control border border-warning" placeholder="Your Message" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-warning text-dark">{{ trans('website/contact.send') }}</button>
        </form>
       </div>
       <div class="col-lg-4">
        <ul class="list-unstyled">
            {{-- <li class="d-flex @if (App::getLocale()=='ar')
            flex-row-reverse
            @endif mb-3">
                <span
                    class="circle bg-warning rounded-circle d-flex
            justify-content-center align-items-center mr-3">
                    <i style="font-size:20px;" class="fas fa-map-marker-alt text-dark"></i>
                </span>
                <p class="mt-1 text-capitalize text-dark">nablus</p>
            </li> --}}
            <li class="d-flex @if (App::getLocale()=='ar')
            flex-row-reverse
            @endif mb-3">
                <span
                    class="circle bg-warning rounded-circle d-flex
            justify-content-center align-items-center mr-3">
                    <i style="font-size:20px;" class="fas fa-phone text-dark"></i>
                </span>
               <a href="tel:0595521651"  class=" text-decoration-none">
                   <p class="mt-1 text-dark"> 0595521651</p>
                </a>
            </li>
            <li class="d-flex @if (App::getLocale()=='ar')
            flex-row-reverse
            @endif mb-3">
                <span
                    class="circle bg-warning rounded-circle d-flex
            justify-content-center align-items-center mr-3">
                    <i style="font-size:20px;" class="fas fa-envelope text-dark"></i>
                </span>
               <a target="_blank" href="mailto:suhashehadeh123@gmail.com"
               class=" text-decoration-none">
                   <p class="mt-1 text-dark">suhashehadeh123@gmail.com</p>
                </a>
            </li>
            <li class="d-flex @if (App::getLocale()=='ar')
            flex-row-reverse
            @endif mb-3">
                <span
                    class="circle bg-warning rounded-circle d-flex
                     justify-content-center align-items-center mr-3">
                    <i style="font-size:20px;" class="fab fa-linkedin-in text-dark"></i>
                </span>
                <a target="_blank" href="https://www.linkedin.com/in/suha-shehadeh-02a9471a5/"
                class=" text-decoration-none">
                    <p class="mt-1 text-dark">www.linkedin.com/in/suha-shehadeh</p>
                </a>
            </li>

        </ul>
       </div>
   </div>
</div>
