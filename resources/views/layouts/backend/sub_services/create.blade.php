<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning border border-warning">
                <h5 class="modal-title">Add New Sub-Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createSubService">
                    @csrf
                    <div class="form-group">
                        <input name='name_ar' type="text" class="form-control" placeholder="sub-service in Arabic">
                    </div>
                    <div class="form-group">
                        <input name='name_en' type="text" class="form-control" placeholder="sub-service in English">
                    </div>
                    <select name="service_id" id="selectService" class="form-control">

                    </select>

                </form>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button id="add_sub_service" type="button" class="btn btn-warning">Save changes</button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        getData();

        function getData() {
            let tbody = $('#tbody');
            $.ajax({
                type: 'get',
                url: '{{ route('sub_services.get') }}',
                success: function(data) {
                    tbody.html('');
                    $.each(data.sub_services, function(key, item) {
                        tbody.append(
                            ` <tr id="${item.id}">
                            <td>${key+1}</td>
                            <td>${item.name.{{ App::getLocale() }}}</td>
                            <td>${item.service.name.{{ App::getLocale() }}}</td>
                            <td>
                                <button sub-service-id="${item.id}" class="btn btn-dark text-warning editSubService"
                                data-toggle="modal" data-target="#edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button sub-service-id="${item.id}" class="btn btn-dark text-danger deleteSubService">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>`
                        );

                    });
                }
            });
        }



        $(document).on('click', '#add_sub_service', function(e) {
            e.preventDefault();
            let form = $('#createSubService')[0];
            let formData = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{ route('sub_services.store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#create').modal('hide'); // to hide the modal
                    getData();
                    $('#createSubService').trigger('reset');

                }
            });
        });

        $(document).on('click', '.deleteSubService', function(e) {
            e.preventDefault();
            let id = $(this).attr('sub-service-id');

            $.ajax({
                type: 'post',
                url: '{{ route('sub_services.delete') }}',
                data: {
                    'id': id,
                    '_token': '{{ csrf_token() }}',
                },
                success: function(response) {
                    getData();
                }
            });
        });

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

        $('#edit').on('shown.bs.modal',function () {
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

        // $(document).on('click', '.editSubService', function() {

        //     let id = $(this).attr('sub-service-id');
        //     $.ajax({
        //         type: "get",
        //         url: "{{ route('sub_services.get_edit') }}",
        //         data: {
        //             'id': id,
        //         },
        //         success: function(response) {
        //             $('#id').val(response.id);
        //             $('#name_ar').val(response.name_ar);
        //             $('#name_en').val(response.name_en);
        //             $('#service_id').val(response.service_id);

        //         }
        //     });
        // });

        // $(document).on('click', '#edit_sub_service', function(e) {
        //     e.preventDefault();
        //     let form = $('#editSubService')[0];
        //     let formData = new FormData(form);
        //     $.ajax({
        //         type: "post",
        //         url: "{{ route('sub_services.my_update') }}",
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         success: function(response) {
        //             $('#editSub').modal('hide'); // to hide the modal
        //             getData();
        //             $('#editSubService').trigger('reset');
        //         }
        //     });
        // });



    </script>
@endsection
