@extends('layouts.setup')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="register text-center m-4">
                    <h2>{{ __('Verify Your Email Address') }}</h2>
                </div>
                <div class="card">

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf

                            <button type="submit "
                                class="btn w-100 btn-block btn-dark mt-3 mb-0">{{ __('click here to request another') }}</button>.


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
