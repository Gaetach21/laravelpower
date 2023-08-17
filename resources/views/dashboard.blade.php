@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

<div class="container">
  <h1>Tableau de bord</h1>
  <div class="alert alert-success">
      Vous êtes connectés!
  </div>
  <div class="row" style="margin-top: 45px;">
    <div class="col-md-6">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    {{ Auth::user()->name }}
  </button>
  <div class="dropdown-menu">
    <span>
      <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Deconnexion') }}
                    </x-responsive-nav-link>
      </form>
    </span>
  </div>
</div>

        
          <div class="col-md-6">
            <table class="table table-bordered">
              <thead class="table-primary">
                <th>Nom</th>
                <th>Email</th>
                <th></th>
              </thead>
              <tbody>
                <tr>
                  <td>{{ Auth::user()->name }}</td>
                  <td>{{ Auth::user()->email }}</td>
                  <td>
                   <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Deconnexion') }}
                    </x-responsive-nav-link>
                </form>
            </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>             
@endsection

