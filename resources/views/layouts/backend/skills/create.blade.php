<!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-warning border border-warning">
          <h5 class="modal-title">Add New Skill</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="createSkill">
                @csrf
                <div class="form-group">
                    <input name='name' type="text" class="form-control"  placeholder="skill">
                </div>
                <div class="form-group">
                    <input name="percent" type="number" class="form-control"  placeholder="percent %">
                </div>

            </form>
        </div>
        <div class="modal-footer">
          <button id="close" type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          <button id="add_skill" type="button" class="btn btn-warning">Save changes</button>
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
                url: '{{ route('skills.get') }}',
                success: function(data) {
                    tbody.html('');
                    $.each(data.skills, function(key, item) {
                        // console.log(item.name.{{ App::getLocale() }});
                        tbody.append(
                            ` <tr id="${item.id}">
                            <td>${key+1}</td>
                            <td>${item.name}</td>
                            <td>${item.percent}%</td>
                            <td>

                                <button skill-id="${item.id}" class="btn btn-dark text-warning editSkill"
                                data-toggle="modal" data-target="#edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button skill-id="${item.id}" class="btn btn-dark text-danger deleteSkill">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>`
                        );
                    });
                }
            });
        }
          $(document).on('click','#add_skill', function () {
               let form = $('#createSkill')[0];
               let formData = new FormData(form);

               $.ajax({
                   type: "post",
                   url: "{{route('skills.store')}}",
                   data: formData,
                   contentType: false,
                   processData: false,
                   success: function (response) {
                       $('#create').modal('hide'); // to hide the modal
                       getData();
                       $('#createSkill').trigger('reset');

                   }
               });
          });
          $(document).on('click','.deleteSkill', function (e) {
              e.preventDefault();
              let id= $(this).attr('skill-id');
              $.ajax({
                  type: 'post',
                  url: '{{route('skills.delete')}}',
                  data: {
                    'id': id,
                    '_token': '{{ csrf_token() }}',
                  },
                  success: function (response) {
                      getData();
                  }
              });
          });
          $(document).on('click','.editSkill', function () {
              let id = $(this).attr('skill-id');
              $.ajax({
                  type: "get",
                  url: "{{route('skills.get_edit')}}",
                  data: {
                      'id':id,
                  },
                  success: function (response) {
                     $('#id').val(response.id);
                     $('#name').val(response.name);
                     $('#percent').val(response.percent);
                  }
              });
          });

          $(document).on('click', '#edit_skill',function (e) {
                e.preventDefault();
                let form = $('#editSkill')[0];
                let formData = new FormData(form);
                $.ajax({
                    type: "post",
                    url: "{{route('skills.my_update')}}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                           $('#edit').modal('hide'); // to hide the modal
                           getData();
                           $('#editSkill').trigger('reset');
                    }
                });
          });
     </script>
  @endsection
