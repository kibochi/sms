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

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Students</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $student->count() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-user-graduate fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Fees </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                {{ $schoolfees->sum('amount') * $student->count() }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Classrooms</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $classrooms->count() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-school fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Subjects</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $subject->count() }}
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center login">
                                    <h5>Student Financial</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table  table-stripped" id="myTable">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">
                                                        Student ID
                                                    </th>
                                                    <th class="text-center">
                                                        First Name
                                                    </th>
                                                    <th class="text-center">
                                                        Sur Name
                                                    </th>

                                                    <th class="text-center">
                                                        Class
                                                    </th>

                                                    <th class="text-center">
                                                        Fee Paid
                                                    </th>
                                                    <th class="text-center">
                                                        Balance
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student as $key => $stud)
                                                    <tr>
                                                        <td class="text-center">
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $stud->student_id }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $stud->firstname }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $stud->surname }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $stud->class }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $fees->amount }}
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                    </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header text-center login">
                                    <h5>Student Perfomance</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table  table-stripped" id="myTabletwo">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">
                                                        Student ID
                                                    </th>
                                                    <th class="text-center">
                                                        First Name
                                                    </th>
                                                    <th class="text-center">
                                                        Sur Name
                                                    </th>

                                                    <th class="text-center">
                                                        Class
                                                    </th>

                                                    <th class="text-center">
                                                        Subject
                                                    </th>
                                                    <th class="text-center">
                                                        Marks
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($student as $key => $stud)
                                                    <tr>
                                                        <td class="text-center">
                                                            {{ $key + 1 }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $stud->student_id }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $stud->firstname }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $stud->surname }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $stud->class }}
                                                        </td>
                                                        <td class="text-center">
                                                            {{ $fees->amount }}
                                                        </td>
                                                        <td class="text-center">

                                                        </td>
                                                    </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}




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
