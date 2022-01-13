@extends('layouts.admin-master')

@section('admin-content')

<div class="card">
    <div class="card-content">
        <h5 class="card-title">SubCategories</h5>
        <a class="waves-effect waves-light btn modal-trigger" href="#subcategory">Add</a>
        @include('admin.products.subcategory.addsubcategory')
        <div class="table-responsive">
            <table class="table striped m-b-20" id="editable-datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Meta Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategory as $key=>$item)
                    <tr id="1" class="gradeX">
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->category->category_name }}</td>
                        <td>{{ $item->subcategory_name }}</td>
                        <td>{{ $item->meta_title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ url('admin/subcategory/delete/'.$item->id) }}" id="delete" title="delete" class="waves-effect waves-light btn btn-round red">Delete</a>
                            <a class="waves-effect waves-light btn btn-round blue">Edit</a>
                        </td>
                    </tr>                         
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection