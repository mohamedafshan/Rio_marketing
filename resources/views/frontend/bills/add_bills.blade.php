@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Bill</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Bills</a></li>
                        <li class="breadcrumb-item active">Add Bill</li>
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
                            <div class="input-group date datepicker-input" data-target-input="nearest">
                                <input class="form-control datetimepicker-input" type="text"
                                    placeholder="19/05/2024">
                                <div class="input-group-append" data-toggle="datetimepicker">
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
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Representative Details</h3>
                </div>
                <div class="row">
                    <div class="card-body col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input type="text" class="form-control" placeholder="Marazin Tea Shop">
                        </div>
                    </div>

                    <div class="card-body col-md-3">
                        <!-- Date -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Invoice Number</label>
                            <input type="text" class="form-control" placeholder="#ABC001">
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
                                <input type="text" class="form-control" placeholder="15,989">
                            </div>
                        </div>
                    </div>

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
                            <label>Date:</label>
                            <div class="input-group date datepicker-input" data-target-input="nearest">
                                <input class="form-control datetimepicker-input" type="text"
                                    placeholder="19/05/2024">
                                <div class="input-group-append" data-toggle="datetimepicker">
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

    <div class="row">
        <div class="col-md-12">
            <div class="card card-gray ">
                <div class="card-header">
                    <h3 class="card-title">Returns</h3>
                </div>
                <div class="row">
                    <div class="card-body col-md-3">
                        <!-- Date -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sellable Retuen</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rs. </span>
                                </div>
                                <input type="text" class="form-control" placeholder="15,989">
                            </div>
                        </div>
                    </div>

                    <div class="card-body col-md-3">
                        <!-- Date -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Market Return (Expired)</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rs. </span>
                                </div>
                                <input type="text" class="form-control" placeholder="0">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="mr-2">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="#" class="btn btn-block btn-secondary">Clear</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="#" class="btn btn-block btn-danger">Submit & Credit Collection</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="#" class="btn btn-block btn-primary">Submit & Add New Bill</a>
                </div>
            </div>
        </div>
    </div>




@stop

@section('css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">

@stop

@section('js')
      <!-- jQuery CDN link -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Bootstrap JS CDN link (required for Datepicker) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
  
      <!-- Bootstrap Datepicker JS CDN link -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  
      <script>
          $(document).ready(function() {
              // Initialize all datepickers with the class 'datepicker-input'
              $('.datepicker-input').datepicker({
                  format: 'dd/mm/yyyy',
                  autoclose: true,
                  todayHighlight: true
              });
          });
      </script>
@stop
