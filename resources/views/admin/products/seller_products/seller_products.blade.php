@extends('layouts.admin-master')

@section('admin_content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Seller Products</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Seller Products</li>
      </ol>
    </nav>
  </div>

</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Seller Products</h6>
<hr>
  <a href="#" data-bs-toggle="modal" data-bs-target="#" class="btn btn-success">Add</a>

<hr/>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Code</th>
            <th>Num of Sale</th>
            <th>Total Stock</th>
            <th>Base Price</th>
            <th>Todays Deal</th>
            <th>Rating</th>
            <th>Published</th>
            <th>Featured</th>
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
            <td> <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div></td>
            <td></td>
            <td><div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div></td>
            <td><div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
            </div></td>
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
