<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning border border-warning">
                <h5 class="modal-title">Add New Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="createService">
                    @csrf
                    <div class="form-group">
                        <input name='name_ar' type="text" class="form-control" placeholder="service in Arabic">
                    </div>
                    <div class="form-group">
                        <input name='name_en' type="text" class="form-control" placeholder="service in English">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button id="add_service" type="button" class="btn btn-warning">Save changes</button>
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
                url: '{{ route('services.get') }}',
                success: function(data) {
                    tbody.html('');
                    $.each(data.services, function(key, item) {
                        tbody.append(
                            ` <tr id="${item.id}">
                            <td>${key+1}</td>
                            <td>${item.name.{{ App::getLocale() }}}</td>
                            <td id="td-id${item.id}"></td>
                            <td>

                                <button service-id="${item.id}" class="btn btn-dark text-warning editService"
                                data-toggle="modal" data-target="#edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button service-id="${item.id}" class="btn btn-dark text-danger deleteService">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>`
                        );
                        if (item.status == '1') {
                            $(`#td-id${item.id}`).append(`
                                    <p class="badge badge-success">{{ trans('admin/services.available') }}</p>
                           `);
                        } else {
                            $(`#td-id${item.id}`).append(`
                            <p class="badge badge-danger">{{ trans('admin/services.not_available') }}</p>
                           `);
                        }
                    });
                }
            });
        }

        $(document).on('click', '#add_service', function(e) {
            e.preventDefault();
            let form = $('#createService')[0];
            let formData = new FormData(form);
            $.ajax({
                type: "post",
                url: "{{ route('services.store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#create').modal('hide'); // to hide the modal
                    getData();
                    $('#createService').trigger('reset');

                }
            });
        });

        $(document).on('click', '.deleteService', function(e) {
            e.preventDefault();
            let id = $(this).attr('service-id');

            $.ajax({
                type: 'post',
                url: '{{ route('services.delete') }}',
                data: {
                    'id': id,
                    '_token': '{{ csrf_token() }}',
                },
                success: function(response) {
                    getData();
                }
            });
        });

        $(document).on('click', '.editService', function() {
            let id = $(this).attr('service-id');
            $.ajax({
                type: "get",
                url: "{{ route('services.get_edit') }}",
                data: {
                    'id': id,
                },
                success: function(response) {
                    $('#id').val(response.id);
                    $('#name_ar').val(response.name_ar);
                    $('#name_en').val(response.name_en);
                    if (response.status == 1) {
                        $('#status').attr('checked', true);
                        $('#status').val(response.status);
                    } else {
                        $('#status').attr('checked', false);
                        $('#status').val(response.status);
                    }
                }
            });
        });
        $(document).on('change', '#status', function() {
            let value = $(this).val();
            if (value == 1) {
                value = 0;
                $(this).attr('checked', false);
            } else {
                value = 1;
                $(this).attr('checked', true);
            }
            let status = $(this).val(value);
        });

        $(document).on('click', '#edit_service', function(e) {
            e.preventDefault();
            let form = $('#editService')[0];
            let formData = new FormData(form);
            formData.append('status', $('#status').val());
            $.ajax({
                type: "post",
                url: "{{ route('services.my_update') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#edit').modal('hide'); // to hide the modal
                    getData();
                    $('#editService').trigger('reset');
                }
            });
        });
    </script>
@endsection
