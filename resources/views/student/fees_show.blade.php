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
                                <h2> Update Fees</h2>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('studentfees.update', $fee) }}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <input type="text" name="admin_id" value="{{ auth()->user()->id }}">
                                        <input type="text" name="student_id" value="{{ $student->id }}">

                                        <div class="form-group row">

                                            <div class="col-md-12">
                                                <label for="amount">Paid Fees Amount</label>
                                                <input type="number" class="form-control" @error('amount') is-invalid
                                                    @enderror name="amount" id="amount" placeholder="eg 80" autofocus
                                                    required>
                                            </div>
                                            @error('amount')
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
