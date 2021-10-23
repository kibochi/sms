@extends('layouts.main')

@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        @include('layouts.sidebar')
        <!-- end sidebar-->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- topbar -->
                @include('layouts.topbar')
                <!-- topsidebar-->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @if (session('message'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row ">
                        <div class="col-md-9 mx-auto">
                            <div class="login text-center m-4">
                                <h2>Fees Structure</h2>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-auto">
                                            <button class="btn btn-outline-dark" data-toggle="modal"
                                                data-target="#newfee"><i class="fa fa-plus"></i> New Fee</button>

                                        </div>
                                        <div class="col-auto ml-auto"><strong>Total <i class="fa fa-dollar-sign"></i>
                                                {{ $total }}
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-md">
                                        <table class="table table-md table-stripped" id="myTable">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">
                                                        Fee Name
                                                    </th>
                                                    <th class="text-center">
                                                        Duration
                                                    </th>
                                                    <th class="text-center">
                                                        Amount
                                                    </th>

                                                    <th class="text-center">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($fees as $key => $fee)
                                                    <tr>
                                                        <td class="text-center">
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $fee->fee_name }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $fee->duration }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $fee->amount }}
                                                        </td>




                                                        <td class="text-center">
                                                            <a href="{{ route('fee.show', $fee) }}"
                                                                class="btn btn-info btn-sm">
                                                                <i class="fa fa-edit"></i></a>
                                                        </td>
                                                    </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    @include('forms.fee_form')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layouts.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


@endsection
