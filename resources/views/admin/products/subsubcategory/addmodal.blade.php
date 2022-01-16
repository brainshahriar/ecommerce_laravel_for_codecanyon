<div class="modal fade" id="subsubcategoryAddModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sub sub Category Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form class="row g-3" action="{{ route('subsubcategory-store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col-12">
            <label class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control">
          </div>
          <div class="mb-3 select2-sm">
            <label class="form-label">Select Category</label>
            <select name="category_id" id="category_id" class="form-control demo-select2-placeholder" required>
              @foreach($categories as $category)
                  <option value="{{$category->id}}">{{__($category->name)}}</option>
              @endforeach
          </select>
          </div>

          <div class="mb-3 select2-sm">
            <label class="col-sm-3 control-label" for="name">{{__('Subcategory')}}</label>
            <div class="col-sm-12">
                <select name="sub_category_id" id="sub_category_id" class="form-control demo-select2-placeholder" required>

                </select>
            </div>
        </div>

          <div class="col-12">
            <label class="form-label">Meta Title</label>
            <input type="text" name="meta_title" class="form-control">
          </div>
          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="4" cols="4" name="meta_description"></textarea>
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
<script src="{{asset('backend')}}/lib/jquerysubsubcategory/jquery-2.2.4.min.js"></script>
<script type="text/javascript">

  function get_subcategories_by_category(){
      var category_id = $('#category_id').val();
      $.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
          $('#sub_category_id').html(null);
          for (var i = 0; i < data.length; i++) {
              $('#sub_category_id').append($('<option>', {
                  value: data[i].id,
                  text: data[i].name
              }));
              $('.demo-select2').select2();
          }
      });
  }

  $(document).ready(function(){
      get_subcategories_by_category();

      // $(".add-colors").click(function(){
      //     console.log('test');
      //     var html = $(".clone-color").html();
      //     $(".increment").after(html);
      // });

      // $("body").on("click",".remove-colors",function(){
      //     $(this).parents(".control-group").remove();
      // });
  });

  $('#category_id').on('change', function() {
      get_subcategories_by_category();
  });

</script>
