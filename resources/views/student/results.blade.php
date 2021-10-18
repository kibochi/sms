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
                                <h2>Exam Results</h2>
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
                            <button class="btn btn-outline-dark" data-toggle="modal" data-target="#newexam"><i
                                    class="fa fa-plus"></i> Attach Results</button>
                            <div class="student_details mt-4">

                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <ul>
                                        <li>Reg No : {{ $student->student_id }}</li>
                                        <li>Student Names : {{ $student->firstname }} {{ $student->surname }}
                                            {{ $student->othername }}</li>
                                        <li>Student Class : {{ $student->class }}</li>
                                    </ul>

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-md">
                                        <table class="table table-md table-stripped" id="myTable">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">
                                                        Subject Name
                                                    </th>
                                                    <th class="text-center">
                                                        Marks
                                                    </th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($exams as $key => $exam)
                                                    <tr>
                                                        <td class="text-center">
                                                            {{ $key + 1 }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $exam->subject_name }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $exam->marks }}
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
                    @include('forms.exam_form')
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
