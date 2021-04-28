@extends('layouts.app')
@section('content')
   
   <div style="background-color: #add8e6; no-repeat fixed; background-size: 100% 100%;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #2196f3; "><font color="white"> {{ __('Register') }}</font></div>

                <div class="card-body" style="background-color: #2196f3; ">
                    <form method="POST" action="{{ route('register') }}" id="submitForm">
                        @csrf

                        <div class="form-group row">
                            <label for="usr_name" class="col-md-4 col-form-label text-md-right"><font color="white">{{   __('Name') }}</font></label>

                            <div class="col-md-6">
                                <input id="usr_name" type="text" class="form-control @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" autocomplete="usr_name" autofocus>

                                @error('usr_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_email" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('E-Mail Address') }}</font></label>

                            <div class="col-md-6">
                                <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="usr_email">

                                @error('usr_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_phone" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('Phone Number') }}</font></label>

                            <div class="col-md-6" id="only-number">
                                <input id="usr_phone" value="{{ old('usr_phone') }}" type="text" class="form-control @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off">

                                @error('usr_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('Password') }}</font></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('usr_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('Confirm Password') }}</font></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="hidden" name="role" value="1">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info" id="btnSubmit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- end: Javascript -->
 
@endsection