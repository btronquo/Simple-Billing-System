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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br/>
                    @endif
                    <h5 class="card-title">Creation d'une référence</h5>
                    <form method="post" action="{{ route('references.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="code">Code de la référence:</label>
                            <input type="text" class="form-control" name="code"/>
                        </div>
                        <div class="form-group">
                            <label for="short_description">Description courte :</label>
                            <input type="text" class="form-control" name="short_description"/>
                        </div>
                        <div class="form-group">
                            <label for="long_description">Description longue :</label>
                            <input type="text" class="form-control" name="long_description"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix :</label>
                            <input type="number" step="any" class="form-control" name="price"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Creer la référence</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
