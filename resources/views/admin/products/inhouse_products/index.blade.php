@extends('layouts.admin-master')

@section('admin_content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">In House Products</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">In House Products</li>
      </ol>
    </nav>
  </div>

</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Products</h6>
<hr>
  <a href="{{route('add-products')}}" class="btn btn-success">Add</a>

<hr/>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($products as $key => $product)
              <tr>
                  <td>{{++$key}}</td>
                  <td>{{__($product->name)}}</td>
                  <td>
                    <a class="btn btn-primary" href="#"><i class="fadeIn animated bx bx-edit"></i></a>
                    <a class="btn btn-danger" href="{{ url('admin/product/delete/'.$product->id) }}" id="delete" title="delete"><i class="fadeIn animated bx bx-trash"></i></a>
                  </td>
              </tr>
          @endforeach
      </tbody>

      </table>
    </div>
  </div>
</div>



@endsection
