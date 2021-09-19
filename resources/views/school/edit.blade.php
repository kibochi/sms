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
                <div class="container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Page Heading -->
                    <div class="col-md-7 mx-auto">
                        <div class="login  text-center m-4">
                            <h2> School Update</h2>
                        </div>
                        <form id="valform" action="{{ route('school.update', $school) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')
                            @include('forms.school_setup_form');
                        </form>
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
