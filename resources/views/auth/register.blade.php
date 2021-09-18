@extends('layouts.setup')
@section('content')
    <div class="container mt-5">
        <div class="row   align-items-center">

            <!-- Registeration Form -->
            <div class="col-md-7  mx-auto">
                <div class="register text-center m-4">
                    <h2>New Account</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- First Name -->
                                <div class="col-md-6">
                                    <div class="form-group ">

                                        <div class="input-group dd">
                                            <div>

                                                <input type="text"
                                                    class="form-control  @error('firstname') is-invalid @enderror"
                                                    placeholder=" " name="firstname" id="firstname"
                                                    value="{{ old('firstname') }}" required autocomplete="name" />
                                                <label for="firstname">firstname</label>

                                                @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="input-group">
                                            <div>
                                                <input type="text"
                                                    class="form-control  @error('lastname') is-invalid @enderror"
                                                    placeholder=" " name="lastname" id="lastname"
                                                    value="{{ old('lastname') }}" required autocomplete="name" />
                                                <label for="lastname">lastname</label>
                                                @error('lastname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="row">
                                <div class="col-md-7">
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
                                <div class="col-md-5">
                                    <div class="form-group ">

                                        <div class="input-group">
                                            <div>
                                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                                    placeholder=" " name="phone" id="phone" value="{{ old('phone') }}"
                                                    max="10" required />
                                                <label for="phone">phone</label>
                                                @error('phone')
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
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <div class="form-group ">

                                        <div class="input-group">
                                            <div>
                                                <input type="password" class="form-control" placeholder=" "
                                                    name="password_confirmation" id="password-confirm" required />
                                                <label for="password-confirm">Confirm password</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group col-lg-12 mx-auto mt-3">

                                <button type="submit" class="btn btn-block btn-dark w-100">Create Account</button>
                            </div>
                            <!-- Already Registered -->
                            <div class="text-center w-100 py-2">
                                <p class="text-muted font-weight-bold">Already Registered? <a href="{{ route('login') }}"
                                        class="text-login ml-2 ">Login</a></p>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
