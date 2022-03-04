<div class="wrapper-content p-5 mt-5">
    <h2 class="text-center text-warning mb-5 text-capitalize">{{ trans('website/portfolio.portfolio') }}</h2>
    <div class="container-fluid">
        <ul id="services_list" class="list-unstyled d-flex justify-content-center">
            <li id="allPort" class="m-2">
                <div class="d-flex flex-column">
                    <a href="#" class="text-warning text-decoration-none">{{ trans('website/portfolio.all') }}</a>
                    <span id="line" class="d-none bg-warning line" style="width:100%; height:2px;"> </span>

                </div>

            </li>

        </ul>
        <div id="portfolio" class="portfolio row">


        </div>


    </div>

</div>
@section('js')
    <script>
        getServices();

        function getServices() {
            let list = $('#services_list');
            $.ajax({
                type: "get",
                url: "{{ route('services.get') }}",
                success: function(response) {

                    $.each(response.services, function(key, item) {
                        list.append(
                            `
                            <li li-id="${item.id}"  class="m-2 li-ser">
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-warning text-decoration-none">${item.name.{{ App::getLocale() }}}</a>
                                    <span id="line${item.id}" class="d-none bg-warning line" style="width:100%; height:2px;"> </span>
                                </div>


                            </li>
                            `

                        );

                    });


                }
            });
        }

        getAll();

        function getAll() {
            const months = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            let row = $('#portfolio');
            $.ajax({
                type: "get",
                url: "{{ route('portfolio.get_all') }}",
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
                                            src="{{ asset('storage/portfolio_thumbnails/' . '${item.thumbnail}') }}"
                                            class="" alt="${item.title.{{ App::getLocale() }}}" />


                                        <div class="card-body">
                                            <h5 class="card-title">${item.title.{{ App::getLocale() }}}</h5>

                                                <p>${item.service.name.{{ App::getLocale() }}}</p>




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


        $(document).on('click','#allPort' ,function () {
            let s = $(`#line`);
           console.log(s);
            $('.line').removeClass('d-inline-block');
            $('.line').addClass('d-none');
            $(`#line`).removeClass('d-none');
            $(`#line`).addClass('d-inline-block');
            console.log(s);
            getAll();
        });

        $(document).on('click', '.li-ser',function (e) {
            // e.preventDefault();
            let id = $(this).attr('li-id');
           let s = $(`#line${id}`);
           console.log(s);
            $('.line').removeClass('d-inline-block');
            $('.line').addClass('d-none');
            $(`#line${id}`).removeClass('d-none');
            $(`#line${id}`).addClass('d-inline-block');
            console.log(s);
            const months = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            let row = $('#portfolio');
            $.ajax({
                type: "get",
                url: "{{route('services.getPort')}}",
                data:{'id':id},
                success: function (response) {
                    let service_name=response.services.name;
                    let service_status=response.services.status;

                    row.html('');
                    $.each(response.services.portfolio, function(key, item) {
                        let date = new Date(item.updated_at);

                        row.append(
                            `
                            <div class="col-lg-4 mb-3">

                                <div class="card position-relative video" style="width: 18rem;">
                                    <div class="overlay d-flex justify-content-center align-items-center position-absolute w-100">

                                </div>
                                        <img height="150px"
                                            src="{{ asset('storage/portfolio_thumbnails/' . '${item.thumbnail}') }}"
                                            class="" alt="${item.title.{{ App::getLocale() }}}" />


                                        <div class="card-body">
                                            <h5 class="card-title">${item.title.{{ App::getLocale() }}}</h5>
                                              <div class="d-flex justify-content-between">
                                                <p>${service_name.{{ App::getLocale() }}}</p>
                                                <div id="state${item.id}">

                                                </div>
                                               </div>



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
                        if (service_status == '1') {
                            $(`#state${item.id}`).append(`
                               <p class="badge badge-success">{{ trans('admin/services.available') }}</p>
                           `);
                        } else {
                            $(`#state${item.id}`).append(`
                               <p class="badge badge-danger">{{ trans('admin/services.not_available') }}</p>
                           `);
                        }


                    });
                }
            });
        });


    </script>
@endsection
