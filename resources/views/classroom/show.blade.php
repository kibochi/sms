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
                                <h2> Update ClassRoom</h2>
                            </div>
                            <nav style="--bs-breadcrumb-divider: '>';" class="mt-4 mb-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('classroom.create') }}">New Classroom</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('classroom.index') }}">All Classroom</a>
                                    </li>
                                </ol>
                            </nav>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('classroom.update', $classroom) }}" method="POST">
                                        @method("PATCH")
                                        @csrf

                                        <div class="row mt-2">

                                            <div class="col-md-12 ">
                                                <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">
                                                <div class="form-group ">

                                                    <div class="input-group dd">
                                                        <div>

                                                            <input type="text"
                                                                class="form-control  @error('classname') is-invalid @enderror"
                                                                placeholder=" " name="classname" id="classname"
                                                                value="{{ old('classname') ?? $classroom->classname }}"
                                                                required />
                                                            <label for="classname">Class Name (eg Grade one)</label>


                                                            @error('classname')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
