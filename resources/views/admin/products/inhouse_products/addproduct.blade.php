@extends('layouts.admin-master')

@section('admin-content')

<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Product</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#!" class="breadcrumb">Home</a>
            <a href="#!" class="breadcrumb">Add Product</a>
        </div>
    </div>
</div>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">buzz</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#references" role="tab" data-toggle="tab">references</a>
    </li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="profile">...</div>
    <div role="tabpanel" class="tab-pane fade" id="buzz">bbb</div>
    <div role="tabpanel" class="tab-pane fade" id="references">ccc</div>
  </div>

@endsection