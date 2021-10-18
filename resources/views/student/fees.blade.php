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
                        <div class="col-md-8 mx-auto">
                            <div class="login text-center ">
                                <h2>Fees Paid</h2>
                            </div>
                            <nav style="--bs-breadcrumb-divider: '>';" class="mt-4 mb-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="{{ route('student.show', $student) }}">
                                            Go back</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('student.create') }}">New student</a>
                                    </li>
                                </ol>
                            </nav>
                            <button class="btn btn-outline-dark" data-toggle="modal" data-target="#newfee"><i
                                    class="fa fa-plus"></i> Attach Fees</button>
                            <div class="student_details mt-4">

                            </div>
                            <div class="card">
                                <div class="card-header ">
                                    <div class="row">
                                        <ul>
                                            <li>Reg No : {{ $student->student_id }}</li>
                                            <li>Student Names : {{ $student->firstname }} {{ $student->surname }}
                                                {{ $student->othername }}</li>
                                            <li>Student Class : {{ $student->class }}</li>
                                        </ul>



                                        <div class="col-auto ml-auto">
                                            <strong>Total <i class="fa fa-dollar-sign"></i>
                                                {{ $total }}
                                            </strong>
                                        </div>

                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-md">
                                        <table class="table table-md table-stripped" id="myTable3">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">
                                                        Paid Date
                                                    </th>
                                                    <th class="text-center">
                                                        Amount
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
                                                            {{ $fee->created_at }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $fee->amount }}
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
                    @include('forms.attach_fee_form')
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
