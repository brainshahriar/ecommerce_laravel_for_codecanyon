<div id="subcategory" class="modal">
    <form action="{{ route('subcategory-store') }}" method="POST">
        @csrf
    <div class="modal-content">
        <h4>Add Category</h4>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="text" name="category_name" class="validate" data-validation="required">
                <label for="category_name">SubCategory Name</label>
            </div>
            <div class="input-field col s12">
                <label>Select Category: <span class="tx-danger">*</span></label>
                <select class="form-control select2-show-search" data-placeholder="Select One" name="category_id" data-validation="required">
                  <option label="Choose one"></option>
                  @foreach ($categories as $cat)
                  <option value="{{ $cat->id }}">{{ ucwords($cat->category_name) }}</option>
                  @endforeach
                </select>
            </div>
            <div class="input-field col s12">
                <input id="email" type="text" name="meta_title" class="validate" data-validation="required">
                <label for="category_name">Meta Title</label>
            </div>
            <div class="input-field col s12">
                <textarea id="email" type="text" name="description" class="validate" data-validation="required"></textarea>
                <label for="category_name">Description</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="modal-action modal-close waves-effect waves-green ">Agree</button>
    </div>
</form>
</div>