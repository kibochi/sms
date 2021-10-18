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

                    <div class="row">
                        <div class="col-md-5 mx-auto">
                            <div class="login text-center m-4">
                                <h2> Update Exam</h2>
                            </div>
                            {{-- <nav style="--bs-breadcrumb-divider: '>';" class="mt-4 mb-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('subject.create') }}">New subject</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('subject.index') }}">All subject</a>
                                    </li>
                                </ol>
                            </nav> --}}
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('exam.update', $exam) }}" method="POST">
                                        @method("PATCH")
                                        @csrf

                                        @foreach ($student as $item)
                                            <input type="text" name="student_id" value="{{ $item->student->student_id }}">
                                        @endforeach
                                        <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">



                                        <div class="form-group row">
                                            <div class="col-sm-6 ">

                                                <label for="subject">Subject</label>
                                                <input type="text" id="subject" name="subject_name" @error('subject_name')
                                                    is-invalid @enderror value="{{ $exam->subject_name }}"
                                                    class="form-control" placeholder="eg Computer">
                                            </div>
                                            @error('subject_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


                                            <div class="col-sm-6">
                                                <label for="marks">Marks</label>
                                                <input type="number" class="form-control" @error('marks') is-invalid
                                                    @enderror name="marks" value="{{ $exam->marks }}" id="marks"
                                                    placeholder="eg 80" autofocus required>
                                            </div>
                                            @error('marks')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                        <hr>

                                        <!-- Submit Button -->
                                        <div class="form-group col-lg-12 mx-auto mt-3">
                                            <button type="submit" class="btn btn2 btn-block btn-dark ">Update</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
