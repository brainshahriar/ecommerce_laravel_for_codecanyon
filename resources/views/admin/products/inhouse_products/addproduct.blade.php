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
    <form action="">
    <div class="tab-content py-3">
      <div class="tab-pane fade show active" id="successgeneral" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Product Name</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
          <div class="col-6">
            <label class="form-label">Select Category</label>
            <select name="category_id" required class="form-control">

                  <option value="1">Category Name 1</option>
                  <option value="2">Category Name 2</option>

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Select Sub Category</label>
            <select name="category_id" required class="form-control">

                  <option value="1">Sub Category Name 1</option>
                  <option value="2">Sub Category Name 2</option>

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Select Sub Sub Category</label>
            <select name="category_id" required class="form-control">

                  <option value="1">Sub Sub Category Name 1</option>
                  <option value="2">Sub Sub Category Name 2</option>

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Select Brand</label>
            <select name="category_id" required class="form-control">

                  <option value="1">Brand 1</option>
                  <option value="2">Brand 2</option>

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Unit</label>
            <input type="number" id="banner" name="banner" class="form-control">
          </div>
          <div class="row">

          </div>


              <div class="col-6">
              <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Approved</label>
                <input class="form-check-input" name="status" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>

              </div>
                </div>
      </div>
      <div class="tab-pane fade" id="successimages" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Main Images</label>
            <input type="file" id="name" name="name" class="form-control">
          </div>
          <div class="col-6">
            <label class="form-label">Thumbnail Image (290x300)
            </label>
            <input type="file" id="name" name="name" class="form-control">
          </div>
          <div class="col-6">
            <label class="form-label">Featured (290x300)</label>
            <input type="file" id="name" name="name" class="form-control">
          </div>
          <div class="col-6">
            <label class="form-label">Flash Deal (290x300)</label>
            <input type="file" id="name" name="name" class="form-control">
          </div>
      </div>
      <div class="tab-pane fade" id="successvideos" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Video Provider</label>
            <select name="category_id" required class="form-control">

                  <option value="1">Youtube</option>
                  <option value="2">Daily Motion</option>
                  <option value="2">Vimeo</option>

          </select>
          </div>
          <div class="col-6">
            <label class="form-label">Video Link</label>
            <input type="text" id="name" name="name" class="form-control">
          </div>
      </div>
      <div class="tab-pane fade" id="successmetatags" role="tabpanel">
            <div class="col-6">
              <label class="form-label">Meta Tag</label>
              <input type="text" class="form-control" data-role="tagsinput" value="jQuery,Script,Net">
            </div>
            <div class="col-6">
              <label class="form-label">Meta Title</label>
              <input type="text" id="name" name="name" class="form-control">
            </div>


            <div class="col-6">
              <label class="form-label">Meta Image</label>
              <input type="file" id="name" name="name" class="form-control">
            </div>
            <div class="col-6">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="4" cols="4" name="meta_description"></textarea>
            </div>
        </div>

      <div class="tab-pane fade" id="successcustomerchoice" role="tabpanel">
        <p>Customer Choice</p>
      </div>
      <div class="tab-pane fade" id="successprice" role="tabpanel">
          <div class="col-6">
            <label class="form-label">Seller Rate</label>
            <input type="number" class="form-control" data-role="tagsinput" >
          </div>
          <div class="col-6">
            <label class="form-label">Admin Rate</label>
            <input type="number" class="form-control" data-role="tagsinput">
          </div>
          <div class="col-6">
            <label class="form-label">Tax</label>
            <input type="number" class="form-control" data-role="tagsinput" placeholder="%">
          </div>
          <div class="col-6">
            <label class="form-label">Discount</label>
            <input type="number" class="form-control" data-role="tagsinput" placeholder="%">
          </div>
          <div class="col-6">
            <label class="form-label">Seller Comission</label>
            <input type="number" class="form-control" data-role="tagsinput" placeholder="%">
          </div>
          <div class="col-6">
            <label class="form-label">Cashback</label>
            <input type="number" class="form-control" data-role="tagsinput" >
          </div>
          <div class="col-6">
            <label class="form-label">Quantity</label>
            <input type="number" class="form-control" data-role="tagsinput">
          </div>
      </div>
      <div class="tab-pane fade" id="successdescription" role="tabpanel">
        <div class="col-6">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="4" cols="4" name="meta_description"></textarea>
        </div>
      </div>
      <div class="tab-pane fade" id="successshippinginfo" role="tabpanel">
            <div class="col-6">
            <div class="form-check form-switch">
              <label class="form-check-label" for="flexSwitchCheckChecked">Free Shipping</label>
              <input class="form-check-input" name="status" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>

            </div>
              </div>
              <div class="col-6">
              <div class="form-check form-switch">
                <label class="form-check-label" for="flexSwitchCheckChecked">Flat Rate</label>
                <input class="form-check-input" name="status" value="1" type="checkbox" id="flexSwitchCheckChecked" checked>

              </div>
                </div>
                <div class="col-6">
                  <label class="form-label">Shipping Cost</label>
                  <input type="number" class="form-control" data-role="tagsinput">
                </div>

      </div>

    </div>
    <div class="form-controll">
     
      <button class="btn btn-success" type="submit">Save</button>

    </div>
  </form>
  </div>
</div>



@endsection
