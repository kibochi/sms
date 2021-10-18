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
                            <nav style="--bs-breadcrumb-divider: '>';" class="mt-4 mb-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('fee.create') }}">New Fee</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('fee.index') }}">All Fee</a>
                                    </li>
                                </ol>
                            </nav>
                            <div class="card">
                                <div class="card-body">
                                    <div class="modal-body">
                                        <form action="{{ route('fee.update', $fee) }}" method="POST">
                                            @csrf
                                            @method('PATCH')

                                            <input type="hidden" name="admin_id" value="{{ auth()->user()->id }}">

                                            <div class="form-group row">
                                                <div class="col-sm-4">

                                                    <label for="fee">Fee Name</label>
                                                    <input type="text" id="fee" name="fee_name" @error('fee_name')
                                                        is-invalid @enderror class="form-control"
                                                        placeholder="eg Lunch Fee"
                                                        value="{{ old('fee_name') ?? $fee->fee_name }}">
                                                </div>
                                                @error('fee_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="col-sm-4">
                                                    <label for="amount">Fees Amount</label>
                                                    <input type="text" class="form-control" @error('amount') is-invalid
                                                        @enderror name="amount" id="amount" placeholder="eg 80"
                                                        value="{{ old('amount') ?? $fee->amount }}" autofocus required>
                                                </div>
                                                @error('amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <div class="col-sm-4">
                                                    <label for="duration">Fees Duration</label>
                                                    <input type="text" class="form-control" @error('duration') is-invalid
                                                        @enderror name="duration" id="duration"
                                                        value="{{ old('duration') ?? $fee->duration }}"
                                                        placeholder="Monthly,Year," autofocus required>
                                                </div>
                                                @error('duration')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <hr>

                                            <!-- Submit Button -->
                                            <div class="form-group col-lg-12 mx-auto mt-3">
                                                <button type="submit" class="btn btn2 btn-block btn-dark ">save</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <div class="col-auto ">
                                        <button type="button" class="btn btn-outline-danger" id="delete_fee"><i
                                                class="fa fa-trash "></i> Delete</button>
                                        <form id="form-delete" action="{{ route('fee.destroy', $fee) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
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
