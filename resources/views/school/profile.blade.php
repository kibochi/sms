@extends('layouts.main') @section('content')

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
                    <div class="login text-center mb-3 ">
                        <h2>Admin Account Information</h2>
                    </div>
                    <!-- Page Heading -->
                    <div class="row ">

                        <div class="col-md-8 mx-auto">

                            <!-- Page Heading -->
                            <div class="card ">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Admin Name</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{ $school->firstname }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{ $school->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{ $school->phone }}
                                        </div>
                                    </div>
                                    <hr>



                                    <div class="button-group text-center">
                                        <a href="{{ route('school.edit', $school) }}" class="btn  btn-dark w-25">Edit</a>
                                        <a href="" id="delete_account" class="btn  btn-outline-danger">Delete Account</a>
                                        <form id="form-submit" action="{{ route('school.destroy', $school) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
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


    @push('scripts')
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                $("#delete_account").on('click', function(e) {
                    e.preventDefault();
                    // var form = $(this).closest("form");
                    // var staff = $(this).data("id");

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var form = document.getElementById("form-submit").submit();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    })

                });
            });
        </script>
    @endsection
