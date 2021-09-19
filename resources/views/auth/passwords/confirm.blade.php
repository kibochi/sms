@extends('layouts.setup')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="register text-center m-4">
                    <h2>{{ __('Confirm Password') }}</h2>
                </div>
                <div class="card">


                    <div class="card-body">


                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0 mx-auto">
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-primary ">
                                        {{ __('Confirm Password') }}
                                    </button>


                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                                <div class="col-md-7">
                                    <a href="{{ route('school.index') }}"
                                        class="btn btn-outline-dark col-md-6 float-right">Cancel! Go back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
