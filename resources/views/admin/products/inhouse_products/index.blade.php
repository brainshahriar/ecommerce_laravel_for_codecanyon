@extends('layouts.admin-master')

@section('admin-content')


    <!-- ============================================================== -->
    <!-- Title and breadcrumb -->
    <!-- ============================================================== -->
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Inhouse Products</h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Inhouse Products</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Container fluid scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">

            <div class="col s12">
                <div class="card">

                    <div class="card-content">
                      <a class="waves-effect waves-light btn btn-round green" href="{{ route('add-products') }}">Add Products</a>
                        <table id="zero_config" class="responsive-table display" style="width:100%">
                            <thead>
                                <tr>
                                  <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Code</th>
                                    <th>No of Sale</th>
                                    <th>Total Stock</th>
                                    <th>Base Price</th>
                                    <th>Todays Deal</th>
                                    <th>Rating</th>
                                    <th>Published</th>
                                    <th>Featured</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Test</td>
                                  <td>
                                    <img src="" alt="">
                                  </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                      <a href="#"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                              </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- Container fluid scss in scafholding.scss -->
    <!-- ============================================================== -->



@endsection
