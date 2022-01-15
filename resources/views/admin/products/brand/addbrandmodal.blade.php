<div class="modal fade" id="brandAddModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Brand</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3" action="{{ route('brand-store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-12">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" data-validation="required">
          </div>
          <div class="col-12">
            <label class="form-label">Logo (120*80)</label>
            <input type="file" id="logo" name="logo" class="form-control" data-validation="required">
          </div>
          <div class="col-12">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="meta_description" class="form-control" rows="4" cols="4" data-validation="required"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
