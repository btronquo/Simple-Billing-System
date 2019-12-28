@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Clients
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div><br />
                  @endif
                    <h5 class="card-title">Mettre à jour la fiche client de: {{ $customer->name }} </h5>

                    <form method="post" action="{{ route('customers.update', $customer->id) }}">
                        <div class="form-group">
                            @csrf
                            @method('PATCH')
                            <label for="type_id">Type de société :</label>
                            <select class="form-control" name="type_id">
                                <option value="{{ $customer->compagnyType->type_id }}" selected>{{ $customer->compagnyType->name }}</option>
                                @foreach($compagnytypes as $id => $compagnytype)
                                  <option value="{{ $compagnytype->type_id }}">{{ $compagnytype->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Nom de la société :</label>
                            <input type="text" class="form-control" name="name" value="{{ $customer->name }}"/>
                        </div>
                        <div class="form-group">
                            <label for="address_line_1">Adresse Ligne 1 :</label>
                            <input type="text" class="form-control" name="address_line_1" value="{{ $customer->address_line_1 }}" />
                        </div>
                        <div class="form-group">
                            <label for="address_line_2">Adresse Ligne 2 :</label>
                            <input type="text" class="form-control" name="address_line_2" value="{{ $customer->address_line_2 }}"/>
                        </div>
                        <div class="form-group">
                            <label for="zip">Code Postal :</label>
                            <input type="text" step="any" class="form-control" name="zip" value="{{ $customer->zip }}"/>
                        </div>
                        <div class="form-group">
                            <label for="city">Ville :</label>
                            <input type="text" step="any" class="form-control" name="city" value="{{ $customer->city }}"/>
                        </div>
                        <div class="form-group">
                            <label for="country">Pays :</label>
                            <input type="text" step="any" class="form-control" name="country" value="{{ $customer->country }}"/>
                        </div>
                        <div class="form-group">
                            <label for="contact_firstname">Contact - Prénom :</label>
                            <input type="text" step="any" class="form-control" name="contact_firstname" value="{{ $customer->contact_firstname }}"/>
                        </div>
                        <div class="form-group">
                            <label for="contact_lastname">Contact - Nom :</label>
                            <input type="text" step="any" class="form-control" name="contact_lastname" value="{{ $customer->contact_lastname }}"/>
                        </div>
                        <div class="form-group">
                            <label for="contact_mail">Contact - Mail :</label>
                            <input type="text" step="any" class="form-control" name="contact_mail" value="{{ $customer->contact_mail }}"/>
                        </div>
                        <div class="form-group">
                            <label for="contact_phone">Contact - Téléphone :</label>
                            <input type="text" step="any" class="form-control" name="contact_phone" value="{{ $customer->contact_phone }}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour la fiche Client</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
