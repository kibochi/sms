@extends('layouts.setup')
@section('content')
    <div class="container py-5">
        <div class="row mt-5 mt-4 align-items-center">

            <!-- Login Form -->
            <div class="col-md-6  mx-auto">
                <div class="login text-center m-4">
                    <h2>{{ __('Reset Password') }}</h2>
                </div>
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class=" col-form-label ">{{ __('E-Mail Address') }}</label>


                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>

                            <div class="form-group mb-0">
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send ') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
