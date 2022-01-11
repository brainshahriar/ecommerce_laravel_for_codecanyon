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
                    <tr id="1" class="gradeX">
                        <td>1</td>
                        <td>Trident</td>
                        <td>Trident</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection