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
<h3>Page d'inscription</h3>


          <div class="col-sm-6">
            <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('register') }}">
            @csrf

            @if (Session::has('error'))
                <div class="alert alert-danger">
                  {{ Session::get('error') }}
                </div>
            @endif

            <!-- Name -->
            <div class="form-group">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="form-control" type="text" name="name" :value="old('name')"  autofocus />
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4" class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"  />
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="mt-4" class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                 autocomplete="new-password" />
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4" class="form-group">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation"  />
                @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

<div class="mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà inscrit ?') }}
                </a>

                <x-button class="btn btn-block btn-primary mx-5">
                    {{ __('Inscrire') }}
                </x-button>
            </div>
        </form>
        </div>
        </div>

@endsection


        

       