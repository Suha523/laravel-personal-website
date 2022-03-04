<!-- Modal -->
<div class="modal fade" id="editSub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning border border-warning">
                <h5 class="modal-title">Edit Sub-Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editSubService">
                    @csrf
                    <div class="form-group">
                        <input hidden id="id" name='id' type="text" class="form-control" placeholder="sub-service in Arabic">
                    </div>
                    <div class="form-group">
                        <input id="name_ar" name='name_ar' type="text" class="form-control" placeholder="sub-service in Arabic">
                    </div>
                    <div class="form-group">
                        <input id="name_en" name='name_en' type="text" class="form-control" placeholder="service in English">
                    </div>

                    <select name="service_id" id="selectService" class="form-control">

                    </select>

                </form>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                <button id="edit_sub_service" type="button" class="btn btn-warning">Save changes</button>
            </div>
        </div>
    </div>
</div>
