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
        @foreach($categories as $key => $category)
        <tr>
            <td>{{++$key}}</td>
            <td>{{($category->name)}}</td>
            <td><img loading="lazy"  class="img-md" src="{{ asset($category->banner) }}" alt="{{__('banner')}}"></td>
            <td><img loading="lazy"  class="img-xs" src="{{ asset($category->icon) }}" alt="{{__('icon')}}"></td>
            <td><label class="switch">
                <input onchange="update_featured(this)" value="{{ $category->id }}" type="checkbox" <?php if($category->featured == 1) echo "checked";?> >
                <span class="slider round"></span></label></td> 
            <td>{{ $category->commision_rate }} %</td>
            <td>{{ $category->cash_back }} %</td>
            <td>{{ $category->cash_back_adjust }} %</td>
            <td><label class="switch">
                <input type="checkbox" <?php if($category->status == 'on') echo "checked";?> disabled >
                <span class="slider round"></span></label></td>

              <td>
                <a class="btn btn-primary" href="#"><i class="fadeIn animated bx bx-edit"></i></a>
                <a class="btn btn-danger" href="{{ url('admin/category/delete/'.$category->id) }}" id="delete" title="delete"><i class="fadeIn animated bx bx-trash"></i></a>
              </td>
     
        </tr>
    @endforeach
      </table>
    </div>
  </div>
</div>

{{-- <script type="text/javascript">
  function update_featured(el){
      if(el.checked){
          var status = 1;
      }
      else{
          var status = 0;
      }
      $.post('{{ route('categories.featured') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
          if(data == 1){
              showAlert('success', 'Featured categories updated successfully');
          }
          else{
              showAlert('danger', 'Something went wrong');
          }
      });
  }
</script> --}}

@endsection
