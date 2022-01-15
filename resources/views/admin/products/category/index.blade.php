@extends('layouts.admin-master')

@section('admin-content')

<div class="card">
    <div class="card-content">
        <h5 class="card-title">Categories</h5>
        <a class="waves-effect waves-light btn modal-trigger" href="#category">Add</a>
        @include('admin.products.category.addcategorymodal')
        <div class="table-responsive">
            <table class="table striped m-b-20" id="editable-datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $key=>$item)

                    <tr id="1" class="gradeX">
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->category_name }}</td>
                        <td>
                            <a href="{{ url('admin/category/delete/'.$item->id) }}" id="delete" title="delete" class="waves-effect waves-light btn btn-round red">Delete</a>
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