@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Credit Collection</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Bills</a></li>
                        <li class="breadcrumb-item active">Credit Collection</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@stop

@section('content')
    {{-- <h3>Bills</h3> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Representative Details</h3>
                </div>
                <div class="row">
                    <div class="card-body col-md-3">
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#reservationdate" placeholder="19/05/2024">
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body col-md-3">
                        <!-- Date -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Route</label>
                            <input type="text" class="form-control" placeholder="Nintavur">
                        </div>
                    </div>

                    <div class="card-body col-md-3">
                        <!-- Date -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rep Name</label>
                            <input type="text" class="form-control" placeholder="Sajith">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Representative Details</h3>
                </div>
                <div class="row">
                    <div class="card-body col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Marazin Tea Shop">
                        </div>
                    </div>

                    <div class="card-body col-md-6">
                        <!-- Date -->
                        <div class="form-group">
                            <p class="text-danger">Total Due is - 24,898</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="card-body col-md-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">SNO</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending">Invoice
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">Bill Amount
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">Status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">Balance
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">SR/MR
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">Rep</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="dtr-control sorting_1" tabindex="0">01</td>
                                    <td>24/04</td>
                                    <td>A290</td>
                                    <td>19,000</td>
                                    <td><span class="bg-success color-palette p-1">partial</span></td>
                                    <td>9,000</td>
                                    <td>#</td>
                                    <td>Sajith</td>
                                    <td><button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">pay</button></td>
                                </tr>
                                <tr>
                                    <td class="dtr-control sorting_1" tabindex="0">02</td>
                                    <td>24/04</td>
                                    <td>A450</td>
                                    <td>15,898</td>
                                    <td><span class="bg-success color-palette p-1">Due</span></td>
                                    <td>15,898</td>
                                    <td>#</td>
                                    <td>Sajith</td>
                                    <td><button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">pay</button></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="mr-2">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="#" class="btn btn-block btn-secondary">Back to BillS</a>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="#" class="btn btn-block btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">Add Bulk Payment</a>
                </div>
            </div>
        </div>

        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> --}}
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Payment</h3>
                                    </div>
                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Customer Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Marazin Tea Shop">
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label>Invoice Date:</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" placeholder="19/05/2024">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Invoice Number</label>
                                                <input type="text" class="form-control" placeholder="A290">
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Invoice Amount</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="19,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paid Cash</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="9,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paid Cash</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Check Number</label>
                                                <input type="text" class="form-control" placeholder="14101994">
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label>Cheque Date</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" placeholder="19/05/2024">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Bank</label>
                                                <input type="text" class="form-control" placeholder="Sampath Bank">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
                        <button type="button" class="btn btn-primary">Add Payment</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    {{-- <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div> --}}
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Bulk Payment </h3>
                                    </div>
                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Customer Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Marazin Tea Shop">
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Balance Amount</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="19,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paid Cash</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="4,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Paid Cheque</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Check Number</label>
                                                <input type="text" class="form-control" placeholder="14101994">
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label>Cheque Date</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" placeholder="19/05/2024">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Bank</label>
                                                <input type="text" class="form-control" placeholder="Sampath Bank">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Total Payment</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="9,000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label>Invoice Date</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" placeholder="19/05/2024">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Invoice Number</label>
                                                <input type="text" class="form-control" placeholder="14101994">
                                            </div>
                                        </div>
                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Bill Amount</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="4,000">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body col-md-3">
                                            <!-- Date -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Pay Now</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rs. </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="2,000">
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
                        <button type="button" class="btn btn-primary">Add Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@stop
