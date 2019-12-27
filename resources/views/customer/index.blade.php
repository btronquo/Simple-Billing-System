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
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <h5 class="card-title">Liste des clients</h5>
                    <p>
                        <a class="btn btn-primary" role="button" href="customers/create">Creer une fiche client</a>
                    </p>

                    <table class="table table-striped">
                        <thead>
                            <thead class="thead-dark">
                                <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Ville</th>
                                <th>Contact</th>
                                <th>Téléphone</th>
                                <th>Mail</th>
                                <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->city}}</td>
                                <td>{{$customer->contact_firstname}} {{$customer->contact_lastname}}</td>
                                <td>{{$customer->contact_phone}}</td>
                                <td>{{$customer->contact_mail}}</td>

                                <td><a href="{{ route('customers.edit', $customer->id)}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <form action="{{ route('customers.destroy', $customer->id)}}" method="post">
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
