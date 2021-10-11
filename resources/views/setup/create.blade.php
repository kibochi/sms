@extends('layouts.setup')
@section('content')
    <div class="container mt-5">

        <div class="row">


            <div class="col-md-7  col-lg-6 col-sm-12 mt-3 mx-auto">
                <form id="valform" action="{{ route('school.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="register text-center m-4">
                        <h2>New School</h2>
                    </div>
                    @include('forms.school_form');
                </form>
            </div>



        </div>

        <!--end row-->


    </div>
    @push('scripts')

    @endpush




@endsection
