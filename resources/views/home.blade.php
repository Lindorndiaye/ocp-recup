@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenue<br>
                    <a href="http://ocpdakar.org/laravel/public/enseignants">Voir la liste des enseignants inscrits</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
