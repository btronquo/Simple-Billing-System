@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Factures émises
                </div>
                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <h5 class="card-title">Liste des factures</h5>
                    <p>
                        <a class="btn btn-primary" role="button" href="billings/create">Creer une facture</a>
                    </p>

                    <table class="table table-striped">
                        <thead>
                            <thead class="thead-dark">
                                <tr>
                                <th>ID</th>
                                <th>N°Facture</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Montant</th>
                                <th>Statut</th>
                                <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                        </thead>
                        <tbody>
                            @foreach($billings as $billing)
                            <tr>
                                <td>{{$billing->id}}</td>
                                <td>{{$billing->billing_number}}</td>
                                <td>{{$billing->billing_date}}</td>
                                <td>{{$billing->customer->name}}</td>
                                <td>{{$billing->amount}}</td>
                                <td>{{$billing->paiementstatus->status_text}}</td>

                                <td><a href="{{ route('billings.edit', $billing->id)}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <form action="{{ route('billings.destroy', $billing->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
