<div class="modal fade" id="subcategoryAddModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sub Category Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3" action="{{route('subcategory.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-12">
            <label class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control">
          </div>
          <div class="mb-3 select2-sm">
            <label class="form-label">Select Category</label>
            <select name="category_id" required class="form-control">
              @foreach($categories as $category)
                  <option value="{{$category->id}}">{{__($category->name)}}</option>
              @endforeach
          </select>
          </div>

          <div class="col-12">
            <label class="form-label">Meta Title</label>
            <input name="meta_title" type="text" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="meta_description" class="form-control" rows="4" cols="4"></textarea>
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
