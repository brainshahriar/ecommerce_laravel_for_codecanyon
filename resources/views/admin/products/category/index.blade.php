@extends('layouts.admin-master')

@section('admin_content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Categories</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Categories</li>
      </ol>
    </nav>
  </div>

</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Categories</h6>
<hr>
  <a href="#" data-bs-toggle="modal" data-bs-target="#categoryAddModal" class="btn btn-success">Add</a>
  @include('admin.products.category.addcategorymodal')
<hr/>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Banner</th>
            <th>Icon</th>
            <th>Featured</th>
            <th>Commission</th>
            <th>Cash Back</th>
            <th>Adjust</th>
            <th>Status</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>CatsEye</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a class="btn btn-primary" href="#"><i class="fadeIn animated bx bx-edit"></i></a>
              <a class="btn btn-danger" href="#"><i class="fadeIn animated bx bx-trash"></i></a>


            </td>

          </tr>

        </tbody>

      </table>
    </div>
  </div>
</div>



@endsection
