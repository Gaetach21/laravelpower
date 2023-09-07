@extends('layouts.app')
@section('content')
<style type="text/css">
	.content
{
	box-sizing: border-box;
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px 40px;
	width: 100%;
	max-width: 940px;
	margin: 0 auto;
}
</style>
<div  class="content">
<h3>Page de connexion</h3>


          <div class="col-sm-6">

            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('login') }}">
            @csrf

            @if (Session::has('error'))
                <div class="alert alert-danger">
                  {{ Session::get('error') }}
                </div>
            @endif

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"  autofocus />
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="mt-4 form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                 autocomplete="current-password" />
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class="flex items-center justify-end mt-4">
                <x-button class="btn btn-block btn-primary">
                    {{ __('Connecter') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>

@endsection