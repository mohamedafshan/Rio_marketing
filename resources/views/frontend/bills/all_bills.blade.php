@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bills</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@stop

@section('content')
    {{-- <h3>Bills</h3> --}}
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

            <div class="row justify-content-end">
                <div class="col-2">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a href="#" class="btn btn-block btn-success btn-sm">Add Customer</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <a href="#" class="btn btn-block btn-primary btn-sm">Add Customer</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">SNO</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Date</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Customer Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Invoice</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Amount</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Discount</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Payment</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">SR/MR</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Rep</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="dtr-control sorting_1" tabindex="0">01</td>
                                <td>24/04</td>
                                <td>Marazin Shop - NTR</td>
                                <td>A290</td>
                                <td>19000</td>
                                <td>0</td>
                                <td><span class="bg-success color-palette p-1">paid</span></td>
                                <td>#</td>
                                <td>Sajith</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td class="dtr-control sorting_1" tabindex="0">02</td>
                                <td>24/04</td>
                                <td>Marazin Shop - NTR</td>
                                <td>A400</td>
                                <td>5875</td>
                                <td>0</td>
                                <td><span class="bg-danger color-palette p-1">Due</span></td>
                                <td>#</td>
                                <td>Afnan</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td class="dtr-control sorting_1" tabindex="0">02</td>
                                <td>24/04</td>
                                <td>Marazin Shop - NTR</td>
                                <td>A450</td>
                                <td>15898</td>
                                <td>0</td>
                                <td><span class="bg-info color-palette p-1">Chque</span></td>
                                <td>#</td>
                                <td>Afnan</td>
                                <td>Action</td>
                            </tr>
                        </tbody>

                    </table>
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

    <!-- Datatables init -->
    {{-- <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script> --}}
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
@stop
