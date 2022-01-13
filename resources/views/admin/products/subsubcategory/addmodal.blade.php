<div id="subsubcategory" class="modal">
    <form action="{{ route('subsubcategory-store') }}" method="POST">
        @csrf
    <div class="modal-content">
        <h4>Add SubSubCategory</h4>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="text" name="subsubcategory_name" class="validate" data-validation="required">
                <label for="category_name">SubSubCategory Name</label>
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
                <label class="form-control-label">Select SubCategory: <span class="tx-danger">*</span></label>
                <select class="form-control select2-show-search" data-placeholder="Select One" name="subcategory_id">
                  <option label="Choose one"></option>
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

<script src="{{asset('backend')}}/lib/jquerysubsubcategory/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('select[name="category_id"]').on('change', function(){
        var category_id = $(this).val();
        if(category_id) {
            $.ajax({
                url: "{{  url('/admin/subcategory/ajax') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) {
                   var d =$('select[name="subcategory_id"]').empty();
                      $.each(data, function(key, value){
                          $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                      });
                },
            });
        } else {
            alert('danger');
        }
    });
});
</script>