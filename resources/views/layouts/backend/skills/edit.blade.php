<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning border border-warning">
                <h5 class="modal-title text-dark">Edit Skill</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editSkill">
                    @csrf
                    <div class="form-group">
                        <input hidden id="id" name='id' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input id="name" name='name' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input id="percent" name="percent" type="number" class="form-control">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button id="edit_skill" type="button" class="btn btn-warning">Save changes</button>
            </div>
        </div>
    </div>
</div>

@section('js')

@endsection
