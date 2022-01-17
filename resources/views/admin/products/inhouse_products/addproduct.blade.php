@extends('layouts.admin-master')

@section('admin_content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Products Information</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Products Information</li>
      </ol>
    </nav>
  </div>
</div>
<!--end breadcrumb-->
<hr/>
<div class="card">
  <div class="card-body">
    <ul class="nav nav-tabs nav-success" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" data-bs-toggle="tab" href="#successgeneral" role="tab" aria-selected="true">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-home font-18 me-1'></i>
            </div>
            <div class="tab-title">General</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successimages" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-user-pin font-18 me-1'></i>
            </div>
            <div class="tab-title">Images</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successvideos" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-video font-18 me-1'></i>
            </div>
            <div class="tab-title">Videos</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successmetatags" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-tag font-18 me-1'></i>
            </div>
            <div class="tab-title">Meta Tags</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successcustomerchoice" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-like font-18 me-1'></i>
            </div>
            <div class="tab-title">Customer Choice</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successprice" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-dollar-circle font-18 me-1'></i>
            </div>
            <div class="tab-title">Price</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successdescription" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-file font-18 me-1'></i>
            </div>
            <div class="tab-title">Description</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successshippinginfo" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-cycling font-18 me-1'></i>
            </div>
            <div class="tab-title">Shipping Info</div>
          </div>
        </a>
      </li>

    </ul>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="tab-content py-3">
      <div class="tab-pane fade show active" id="successgeneral" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Product Name</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
          <div class="col-6">
            <label class="form-label">Select Category</label>
            <select name="category_id" id="category_id" data-validation="required" class="form-control">

              @foreach($categories as $category)
              <option value="{{$category->id}}">{{__($category->name)}}</option>
             @endforeach

          </select>
          </div>
          <div class="col-6 select2-sm">
            <label class="form-label">Select Sub Category</label>
            <select class="form-control demo-select2-placeholder" name="subcategory_id" id="subcategory_id" data-validation="required">

            </select>
          </div>
          <div class="form-group" id="subsubcategory">
            <label class="col-lg-2 control-label">{{__('Sub Subcategory')}}</label>
            <div class="col-lg-7">
              <select class="form-control demo-select2-placeholder" name="subsubcategory_id" id="subsubcategory_id" data-validation="required">
              </select>
            </div>
          </div>
          <div class="col-6">
            <label class="form-label">Select Brand</label>
            <select name="brand_id" data-validation="required" class="form-control">

              @foreach($brands as $brand)
              <option value="{{$brand->id}}">{{__($brand->name)}}</option>
             @endforeach

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Unit</label>
            <input type="unit" data-validation="required" id="banner" name="banner" class="form-control">
          </div>
          <div class="row">

          </div>


              <div class="col-6">
              <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Approved</label>
                <input class="form-check-input" name="approved" data-validation="required" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>
              </div>
                </div>
      </div>
      <div class="tab-pane fade" id="successimages" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Main Images</label>
            <input type="file" id="name" name="main_image" class="form-control" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Thumbnail Image (290x300)
            </label>
            <input type="file" id="name" name="thumbnail_image" class="form-control" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Featured (290x300)</label>
            <input type="file" id="name" name="featured_image" class="form-control" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Flash Deal (290x300)</label>
            <input type="file" id="name" name="flashdeal_image" class="form-control" data-validation="required">
          </div>
      </div>
      <div class="tab-pane fade" id="successvideos" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Video Provider</label>
            <select name="video_provider" data-validation="required" class="form-control">

                  <option value="1">Youtube</option>
                  <option value="2">Daily Motion</option>
                  <option value="2">Vimeo</option>

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Video Link</label>
            <input type="text" id="name" name="video_link" class="form-control" data-validation="required">
          </div>
      </div>
      <div class="tab-pane fade" id="successmetatags" role="tabpanel">
            <div class="col-6">
              <label class="form-label">Meta Tag</label>
              <input type="text" class="form-control" name="meta_tag" data-validation="required">
            </div>
            <div class="col-6">
              <label class="form-label">Meta Title</label>
              <input type="text" id="name" name="meta_title" class="form-control" data-validation="required">
            </div>


            <div class="col-6">
              <label class="form-label">Meta Image</label>
              <input type="file" id="name" name="meta_image" class="form-control" data-validation="required">
            </div>
            <div class="col-6">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="4" cols="4" name="meta_description" data-validation="required"></textarea>
            </div>
        </div>

      <div class="tab-pane fade" id="successcustomerchoice" role="tabpanel">
        <div class="col-6">
          <label class="form-label">Color</label>
          <input type="text" id="name" name="color" class="form-control" data-validation="required">
        </div>


        <div class="col-6">
          <label class="form-label">Size</label>
          <input type="text" id="name" name="size" class="form-control" data-validation="required">
        </div>
      </div>
      <div class="tab-pane fade" id="successprice" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Seller Rate</label>
            <input type="number" name="seller_rate" class="form-control" data-role="tagsinput" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Admin Rate</label>
            <input type="number" name="admin_rate" class="form-control" data-role="tagsinput" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Tax</label>
            <input type="number" name="tax" class="form-control" data-role="tagsinput" placeholder="%" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Discount</label>
            <input type="number" name="discount" class="form-control" data-role="tagsinput" placeholder="%" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Seller Comission</label>
            <input type="number" name="seller_commission" class="form-control" data-role="tagsinput" placeholder="%" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Cashback</label>
            <input type="number" name="cashback" class="form-control" data-role="tagsinput" data-validation="required">
          </div>
          <div class="col-6">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" data-role="tagsinput" data-validation="required">
          </div>
      </div>
      <div class="tab-pane fade" id="successdescription" role="tabpanel">
        <div class="col-6">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="4" cols="4" name="description" data-validation="required"></textarea>
        </div>
      </div>
      <div class="tab-pane fade" id="successshippinginfo" role="tabpanel">
            <div class="col-6">
            <div class="form-check form-switch">
              <label class="form-check-label" for="flexSwitchCheckChecked">Free Shipping</label>
              <input class="form-check-input" name="shipping_type" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>

            </div>
              </div>
              <div class="col-6">
              <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Flat Rate</label>
                <input class="form-check-input" name="shipping_type" value="2" type="checkbox" id="flexSwitchCheckChecked" checked>

              </div>
                </div>
                <div class="col-6">
                  <label class="form-label">Shipping Cost</label>
                  <input type="number" name="flat_shipping_cost" class="form-control" data-role="tagsinput">
                </div>

      </div>

    </div>
    <div class="form-controll">
     
      <button class="btn btn-success" type="submit">Save</button>

    </div>
  </form>
  </div>
</div>

<script src="{{asset('backend')}}/lib/jquerysubsubcategory/jquery-2.2.4.min.js"></script>
<script type="text/javascript">




	function get_subcategories_by_category(){
		var category_id = $('#category_id').val();
		$.post('{{ route('subcategories.get_subcategories_by_category') }}',{_token:'{{ csrf_token() }}', category_id:category_id}, function(data){
		    $('#subcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) { 
		        $('#subcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		    get_subsubcategories_by_subcategory();
		});
	}

	function get_subsubcategories_by_subcategory(){
		var subcategory_id = $('#subcategory_id').val();
		$.post('{{ route('subsubcategories.get_subsubcategories_by_subcategory') }}',{_token:'{{ csrf_token() }}', subcategory_id:subcategory_id}, function(data){
		    $('#subsubcategory_id').html(null);
		    for (var i = 0; i < data.length; i++) {
		        $('#subsubcategory_id').append($('<option>', {
		            value: data[i].id,
		            text: data[i].name
		        }));
		        $('.demo-select2').select2();
		    }
		});
	}


	$('#category_id').on('change', function() {
	    get_subcategories_by_category();
	});

	$('#subcategory_id').on('change', function() {
	    get_subsubcategories_by_subcategory();
	});

	$('#subsubcategory_id').on('change', function() {
	    // get_brands_by_subsubcategory();
		//get_attributes_by_subsubcategory();
	});

	$('#choice_attributes').on('change', function() {
		$('#customer_choice_options').html(null);
		$.each($("#choice_attributes option:selected"), function(){
			//console.log($(this).val());
            add_more_customer_choice_option($(this).val(), $(this).text());
        });
		update_sku();
	});


</script>

@endsection
