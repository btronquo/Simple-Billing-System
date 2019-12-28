@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Facturation
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br/>
                    @endif
                    <h5 class="card-title">Creation d'une facture</h5>
                    <form method="post" action="{{ route('billings.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="customer_id">Client :</label>
                            <select name="customer_id" id="customer_id" class="form-control">
                                <option value="">---</option>
                                @foreach($customers as $id => $customer)
                                  <option value="{{ $id }}">{{ $customer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="amount">Montant total :</label>
                            <input type="text" class="form-control" name="amount"/>
                        </div>
                        <div class="form-group">
                            <label for="billing_date">Date de facturation :</label>
                            <input type="text" class="form-control" name="billing_date" value="2019-12-27" />
                        </div>
                        <div class="form-group">
                            <label for="billing_number">Numéro de facture :</label>
                            <input type="text" class="form-control" name="billing_number" value="FAXXXXXXXXX" />
                        </div>
                        <div class="form-group">
                            <label for="status">Statut :</label>
                            <select name="status_id" id="status" class="form-control">
                                <option value="1" selected>En Attente de paiement</option>
                                <option value="2">Payé</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Commentaire :</label>
                            <input type="text" class="form-control" name="comment" value="RAS" />
                        </div>
                        <button type="submit" class="btn btn-primary">Creer la facture</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
