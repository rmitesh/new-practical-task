<form id="update-brand" class="update-brand" autocomplete="off" novalidate="novalidate" method="post">
    <div class="modal-header">
        <h4 class="modal-title">Update Brand</h4>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <input type="hidden" name="brand_id" value="{{ $brand->id }}" />
                <div class="form-group">
                    <label for="brand_name">Brand Name <span class="text-danger">*</span></label>
                    <input type="text" name="brand_name" value="{{ $brand->name }}" class="form-control brand_name" id="brand_name" placeholder="Brand Name" required="" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-end">
        <button type="submit" class="btn btn-outline-success update-btn">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
</form>