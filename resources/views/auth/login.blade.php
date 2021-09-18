@extends('layouts.setup')
@section('content')
    <div class="container py-5">
        <div class="row mt-5 mt-4 align-items-center">

            <!-- Login Form -->
            <div class="col-md-7 col-lg-5 mx-auto">
                <div class="register text-center m-4">
                    <h2>Login</h2>
                </div>
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            {{-- Email --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">

                                        <div class="input-group">
                                            <div>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder=" " name="email" id="email" value="{{ old('email') }}"
                                                    required autocomplete="email" />
                                                <label for="email">email</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">

                                        <div class="input-group">
                                            <div>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder=" " name="password" id="password" required />
                                                <label for="password">password</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mt-3">
                                <button type="submit" class="btn btn-block btn-dark w-100">Login</button>
                            </div>
                            <div class="forgot ">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="not  mt-3">
                                <p class="text-muted font-weight-bold">Not Registered? <a
                                        href="{{ route('register') }}">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
