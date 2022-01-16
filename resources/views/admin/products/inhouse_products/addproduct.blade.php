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
            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
            </div>
            <div class="tab-title">Videos</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successmetatags" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
            </div>
            <div class="tab-title">Meta Tags</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successcustomerchoice" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
            </div>
            <div class="tab-title">Customer Choice</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successprice" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
            </div>
            <div class="tab-title">Price</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successdescription" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
            </div>
            <div class="tab-title">Description</div>
          </div>
        </a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" href="#successshippinginfo" role="tab" aria-selected="false">
          <div class="d-flex align-items-center">
            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
            </div>
            <div class="tab-title">Shipping Info</div>
          </div>
        </a>
      </li>
      
    </ul>
    <div class="tab-content py-3">
      <div class="tab-pane fade show active" id="successgeneral" role="tabpanel">
        <p>General</p>
      </div>
      <div class="tab-pane fade" id="successimages" role="tabpanel">
        <p>Images</p>
      </div>
      <div class="tab-pane fade" id="successvideos" role="tabpanel">
        <p>Videos</p>
      </div>
      <div class="tab-pane fade" id="successmetatags" role="tabpanel">
        <p>Meta Tags</p>
      </div>
      <div class="tab-pane fade" id="successcustomerchoice" role="tabpanel">
        <p>Customer Choice</p>
      </div>
      <div class="tab-pane fade" id="successprice" role="tabpanel">
        <p>Price</p>
      </div>
      <div class="tab-pane fade" id="successdescription" role="tabpanel">
        <p>Description</p>
      </div>
      <div class="tab-pane fade" id="successshippinginfo" role="tabpanel">
        <p>Shipping Info</p>
      </div>

    </div>
  </div>
</div>



@endsection
