<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning border border-warning">
                <h5 class="modal-title">Add New Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createPortfolio">
                    @csrf
                    <div class="form-group">
                        <input name='title_ar' type="text" class="form-control" placeholder="title in Arabic">
                    </div>
                    <div class="form-group">
                        <input name='title_en' type="text" class="form-control" placeholder="title in English">
                    </div>
                    <div class="form-group">
                        <input name='link' type="text" class="form-control" placeholder="link">
                    </div>
                    <select name="service_id" id="selectService" class="form-control mb-3">

                    </select>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="thumbnail" class="custom-file-input" id="thumbnail">
                          <label id="thumbnailName" class="custom-file-label" for="thumbnail">Choose Thumbnail</label>
                        </div>
                      </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button id="add_portfolio" type="button" class="btn btn-warning">Save changes</button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        $(document).on('change','#thumbnail' ,function () {
            let thumbnail = $(this).val();
            // let image_extension = thumbnail.split('.').pop().toLowerCase();
            // console.log(image_extension);
            $('#thumbnailName').html(thumbnail);
        });

        getData();

        function getData() {
            const months = ["January", "February", "March", "April", "May", "June",
             "July", "August", "September", "October", "November", "December"];
              const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            let tbody = $('#tbody');
            $.ajax({
                type: 'get',
                url: '{{ route('portfolio.get_all') }}',
                success: function(data) {
                    tbody.html('');
                    $.each(data.portfolios, function(key, item) {
                        let date = new Date(item.updated_at);
                        tbody.append(
                            ` <tr id="${item.id}">
                            <td>${key+1}</td>
                            <td>${item.title.{{ App::getLocale() }}}</td>
                            <td><img alt="${item.title.{{ App::getLocale() }}}" width="60px" height="40px"
                                 src="{{ asset('storage/portfolio_thumbnails/'.'${item.thumbnail}') }}"/>
                            </td>
                            <td>${item.service.name.{{ App::getLocale() }}}</td>
                            <td>${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}</td>
                            <td>
                                <button port-id="${item.id}" class="btn btn-dark text-warning editPortfolio"
                                data-toggle="modal" data-target="#edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button port-id="${item.id}" class="btn btn-dark text-danger deletePortfolio">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>`
                        );

                    });
                }
            });
        }

        $(document).on('click', '#add' ,function () {
            let select = $('#selectService');
            $.ajax({
                type: "get",
                url: "{{route('services.get')}}",
                success: function (data) {
                    select.html('');
                    $.each(data.services, function(key, item) {
                        select.append(
                            `
                           <option value="${item.id}">${item.name.{{ App::getLocale() }}}</option>
                           `
                       );

                    });


                }
            });
        });


        $(document).on('click', '#add_portfolio', function(e) {
            e.preventDefault();
            let form = $('#createPortfolio')[0];
            let formData = new FormData(form);
            let thumbnail = $('#thumbnail')[0];
            formData.append("file",thumbnail);


            $.ajax({
                type: "post",
                url: "{{ route('portfolio.store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    //  console.log(response);
                    $('#create').modal('hide'); // to hide the modal
                    getData();
                    $('#createPortfolio').trigger('reset');

                }
            });
        });

        $(document).on('click', '.deletePortfolio', function(e) {
            e.preventDefault();
            let id = $(this).attr('port-id');

            $.ajax({
                type: 'post',
                url: '{{ route('portfolio.delete') }}',
                data: {
                    'id': id,
                    '_token': '{{ csrf_token() }}',
                },
                success: function(response) {
                    // console.log(response.done);

                    getData();
                }
            });
        });

        // $(document).on('click', '.editService', function() {
        //     let id = $(this).attr('service-id');
        //     $.ajax({
        //         type: "get",
        //         url: "{{ route('services.get_edit') }}",
        //         data: {
        //             'id': id,
        //         },
        //         success: function(response) {
        //             $('#id').val(response.id);
        //             $('#name_ar').val(response.name_ar);
        //             $('#name_en').val(response.name_en);
        //             if (response.status == 1) {
        //                 $('#status').attr('checked', true);
        //                 $('#status').val(response.status);
        //             } else {
        //                 $('#status').attr('checked', false);
        //                 $('#status').val(response.status);
        //             }
        //         }
        //     });
        // });
        // $(document).on('change', '#status', function() {
        //     let value = $(this).val();
        //     if (value == 1) {
        //         value = 0;
        //         $(this).attr('checked', false);
        //     } else {
        //         value = 1;
        //         $(this).attr('checked', true);
        //     }
        //     let status = $(this).val(value);
        // });

        // $(document).on('click', '#edit_service', function(e) {
        //     e.preventDefault();
        //     let form = $('#editService')[0];
        //     let formData = new FormData(form);
        //     formData.append('status', $('#status').val());
        //     $.ajax({
        //         type: "post",
        //         url: "{{ route('services.my_update') }}",
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         success: function(response) {
        //             $('#edit').modal('hide'); // to hide the modal
        //             getData();
        //             $('#editService').trigger('reset');
        //         }
        //     });
        // });
    </script>
@endsection
