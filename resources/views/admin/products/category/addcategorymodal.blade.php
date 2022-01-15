<div class="modal fade" id="categoryAddModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Category Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3" action="{{ route('category-store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-12">
            <label class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Serial Number</label>
            <input type="number" class="form-control" id="serial" name="serial">
          </div>
          <div class="col-12">
            <label class="form-label">Banner (200*300)</label>
            <input type="file" id="banner" name="banner" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Icon(32*32)</label>
            <input type="file" id="icon" name="icon" class="form-control">
          </div>

          <div class="col-12">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="4" cols="4" name="meta_description"></textarea>
          </div>
          <div class="col-12">
            <label class="form-label">Cash Back</label>
            <input type="number" min="0" step="0.01" id="cash_back" name="cash_back" class="form-control" placeholder="%">

          </div>
          <div class="col-12">
            <label class="form-label">Adjust</label>
            <input type="number"  min="0" step="0.01"  id="cash_back_adjust" name="cash_back_adjust" class="form-control" placeholder="%">

          </div>
          <div class="col-12">
          <div class="form-check form-switch">
            <input name="user_package_discount" value="on" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">User Package Discount</label>
          </div>
            </div>

              <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input" name="status" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
              </div>
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
