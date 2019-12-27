@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-md-3">
            <div class="card bg-primary">
            <div class="card-body text-white">
                <h5 class="card-title text-center">X</h5>
                <p class="card-text text-center"><b>Facturations Effectuées</b></p>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger">
            <div class="card-body text-white">
                <h5 class="card-title text-center">X</h5>
                <p class="card-text text-center"><b>Facturations en Attente</b></p>
            </div>
            </div>
        </div>

    </div>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    <h5 class="card-title">Beinvenue sur votre Accueil</h5>
                    <p class="card-text">A venir...</p>
                    <a href="#" class="btn btn-primary">Creer une facturation (bientot)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
