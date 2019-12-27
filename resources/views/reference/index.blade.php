@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Références
                </div>
                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <h5 class="card-title">Liste des références</h5>
                    <p>
                        <a class="btn btn-primary" role="button" href="references/create">Creer une référence</a>
                    </p>

                    <table class="table table-striped">
                        <thead>
                            <thead class="thead-dark">
                                <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Description Courte</th>
                                <th>Description Longue</th>
                                <th>Prix</th>
                                <th colspan="2">Actions</th>
                                </tr>
                            </thead>
                        </thead>
                        <tbody>
                            @foreach($references as $reference)
                            <tr>
                                <td>{{$reference->id}}</td>
                                <td>{{$reference->code}}</td>
                                <td>{{$reference->short_description}}</td>
                                <td>{{$reference->long_description}}</td>
                                <td>{{number_format($reference->price,2)}}</td>
                                <td><a href="{{ route('references.edit', $reference->id)}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a></td>
                                <td>
                                    <form action="{{ route('references.destroy', $reference->id)}}" method="post">
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
