@extends('layouts.admin-master')

@section('admin_content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
  <div class="breadcrumb-title pe-3">Brands</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Brands</li>
      </ol>
    </nav>
  </div>

</div>
<!--end breadcrumb-->
<h6 class="mb-0 text-uppercase">Brands</h6>
<hr>
  <a href="#" data-bs-toggle="modal" data-bs-target="#brandAddModal" class="btn btn-success">Add</a>
  @include('admin.products.brand.addbrandmodal')
<hr/>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Logo</th>
            <th>Action</th>

          </tr>
        </thead>
        @foreach ($brand as $key=>$item)
        <tbody>

          <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $item->name }}</td>
            <td><img loading="lazy"  class="img-md" src="{{asset($item->logo)}}" height="30" width="40"  alt="Logo"></td>
            <td>
              <a class="btn btn-primary" href="#"><i class="fadeIn animated bx bx-edit"></i></a>
              <a class="btn btn-danger" href="{{ url('admin/brand/delete/'.$item->id) }}" id="delete" title="delete"><i class="fadeIn animated bx bx-trash"></i></a>
            </td>
          </tr>

        </tbody>
        @endforeach

      </table>
    </div>
  </div>
</div>



@endsection
