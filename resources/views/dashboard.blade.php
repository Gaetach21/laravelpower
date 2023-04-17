@extends('layouts.app')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

<div class="container">
  <style type="text/css">
    table, th, td, tbody {border: 2px solid black; 
      padding: 5px;
      border-collapse: collapse;}
  </style>
        <div class="row" style="margin-top: 45px;">
          <div class="col-md-6">
            <h4>Tableau de bord</h4><br>
            <table class="table table-hover">
              <thead>
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

