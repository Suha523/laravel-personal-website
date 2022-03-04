<div class="wrapper-content p-5" id="skills-section">

    <h2 class="text-center mb-5 text-warning text-capitalize">{{ trans('website/skills.skills_header') }}</h2>
    <div class="container">

        <div class="row">
            <div class="col-lg-6 mb-3">
                <div>
                    <p class="ml-auto mt-4 mb-4 badge badge-warning text-uppercase">
                        {{ trans('website/skills.skills') }}</p>

                </div>

                <ul id="ul" class="list-unstyled">




                </ul>



            </div>
            <div class="col-lg-6">
                <img style="width:100%;height:100%;"
                    src="{{ asset('asstes/img/daniel-korpai-pKRNxEguRgM-unsplash.jpg') }}">

            </div>
        </div>


    </div>

</div>

@section('js')
    <script>
        getData();

        function getData() {
            let ul = $('#ul');
            $.ajax({
                type: 'get',
                url: '{{ route('skills.get') }}',
                success: function(data) {
                    //  console.log(data.skills);

                    $.each(data.skills, function(key, item) {
                        ul.append(`
                        <li id="${item.percent}" class="skill">

                                <p class="skill_name ">${item.name}</p>

                    <div class="mb-3 position-relative">
                        <div class="progress">
                            <div id="progress-bar" class="progress-bar bg-warning" role="progressbar" style="width: ${item.percent}%;" aria-valuenow="${item.percent}" aria-valuemin="0" aria-valuemax="100">

                                    <span class="triangle position-absolute"></span>
                                    <span class="percent text-dark badge badge-warning position-absolute">${item.percent}%</span>

                            </div>
                        </div>
                    </div>


                 </li>

                        `);


                    });
                    $(".skill").each(function() {

                        let id = $(this).attr("id");
                        let con1 = id - 3;
                        let con2 = id - (1 / 2);
                        $(this).find('.percent').css('left', `${con1}%`);
                        $(this).find('.triangle').css('left', `${con2}%`);

                    });


                },
                error: function(data) {
                    console.log("error");
                }
            });
        }

        getServices();

        function getServices() {
            let row = $('#services_row');
            $.ajax({
                type: "get",
                url: "{{ route('services.get') }}",
                success: function(response) {
                    row.html('');
                    $.each(response.services, function(key, item) {
                        row.append(
                            `
                               <div class="col-lg-4 mb-5">
                                  <div class="card">

                                <div class="card-body">
                                    <span
                                        class="circle transform bg-warning rounded-circle d-flex
                                    justify-content-center align-items-center">
                                    <i class="fa-solid fa-code"></i>
                                    </span>
                                    <h5 class="transform-title">${item.name.{{ App::getLocale() }}}</h5>
                                    <ul id="ul${item.id}" class="list-unstyled transform-list">

                                    </ul>

                                </div>
                                <div id="ser_id${item.id}" class="card-footer bg-warning">

                                </div>

                            </div>

                        </div>
                                            `

                        );
                        if (item.status == '1') {
                            $(`#ser_id${item.id}`).append(`
                               <p class="badge badge-success">{{ trans('admin/services.available') }}</p>
                           `);
                        } else {
                            $(`#ser_id${item.id}`).append(`
                               <p class="badge badge-danger">{{ trans('admin/services.not_available') }}</p>
                           `);
                        }

                        let ul = $(`#ul${item.id}`);
                        $.each(item.sub_service, function(key1, item1) {
                            $(ul).append(
                                `
                              <li id="li${item1.id}" class="mb-2">
                                 @if (App::getLocale() == 'en')
                                     <i class="fas fa-feather-alt mr-2 text-warning"></i>
                                     ${item1.name.{{ App::getLocale() }}}
                                 @else
                                     ${item1.name.{{ App::getLocale() }}}
                                     <i class="fas fa-feather-alt mr-2 text-warning"></i>
                                 @endif
                             </li>
                              `
                            );
                        });


                    });


                }
            });
        }
        getPortfolio();

        function getPortfolio() {
            const months = ["January", "February", "March", "April", "May", "June",
             "July", "August", "September", "October", "November", "December"];
              const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            let row = $('#portfolio');
            $.ajax({
                type: "get",
                url: "{{ route('portfolio.get') }}",
                success: function(response) {

                    row.html('');
                    $.each(response.portfolios, function(key, item) {
                        let date = new Date(item.updated_at);
                        row.append(
                            `
                       <div class="col-lg-4 mb-3">

                          <div class="card position-relative video" style="width: 18rem;">
                              <div class="overlay d-flex justify-content-center align-items-center position-absolute w-100">

                         </div>
    <img height="150px"
        src="{{ asset('storage/portfolio_thumbnails/'.'${item.thumbnail}') }}"
        class="" alt="${item.title.{{ App::getLocale() }}}" />


    <div class="card-body">
        <h5 class="card-title">${item.title.{{ App::getLocale() }}}</h5>

    </div>
    <div class="card-footer bg-warning">
        <div
            class="d-flex @if (App::getLocale() == 'ar') flex-row-reverse @endif justify-content-between">
            <a href="${item.link}" target="_blank" class="btn btn-dark text-warning">{{ trans('website/portfolio.demo') }}</a>
            <span class="line d-inline-block bg-dark mt-1"></span>
            <span
                class="circle bg-dark rounded-circle d-flex
                    justify-content-center align-items-center">
                <i class="fas fa-calendar text-warning"></i>
            </span>
            <p class=" mt-1 text-capitalize">${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}</p>
        </div>

    </div>


</div>

</div>

                   `
                        );

                    });
                }
            });
        }

       getfooterServices();
        function getfooterServices() {
            let ul = $('#footer-services');
            $.ajax({
                type: "get",
                url: "{{ route('services.get') }}",
                success: function(response) {
                    ul.html('');
                    $.each(response.services, function(key, item) {
                        ul.append(
                            `
                            <li>
                        <a href="#" class="text-decoration-none">
                            @if (App::getLocale()=='en')
                              <i class="fa-solid fa-angle-right text-footer mr-2"></i>
                              <h4 class="text-footer d-inline-block">${item.name.{{ App::getLocale() }}}</h4>
                            @else
                            <h4 class="text-footer d-inline-block">${item.name.{{ App::getLocale() }}}</h4>
                              <i class="fa-solid fa-angle-left text-footer ml-2"></i>
                            @endif
                        </a>
                    </li>
                              `
                            );



                    });


                }
            });
        }

    </script>
@endsection
