@extends('layouts.app')

@section('content')
@if(Auth::user()->hasRole('admin'))
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Acceso como administrador</div>

                  <div class="card-body">
                      Administrador!
                  </div>
              </div>
          </div>
      </div>
  </div>
@else
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Acceso usuario</div>

                  <div class="card-body">
                      Acceso usuario
                  </div>
              </div>
          </div>
      </div>
  </div>
@endif

@endsection
