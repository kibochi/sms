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
                            <div class="login text-center m-4">
                                <h2>Classrooms</h2>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn btn-outline-dark" data-toggle="modal" data-target="#newclass"><i
                                            class="fa fa-plus"></i> Classroom</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-md">
                                        <table class="table table-md table-stripped" id="myTable">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">
                                                        Class Name
                                                    </th>
                                                    <th class="text-center">
                                                        # Of Students
                                                    </th>
                                                    <th class="text-center">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($classroom as $key => $class)
                                                    <tr>
                                                        <td class="text-center">
                                                            {{ $key + 1 }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $class->classname }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{ $student->count() }}
                                                        </td>


                                                        <td class="text-center">
                                                            <a href="{{ route('classroom.show', $class) }}"
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
                    @include('forms.classroom_form')
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
