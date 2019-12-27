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
                        </div><br />
                  @endif
                    <h5 class="card-title">Mettre à jour la référence: {{ $reference->code }} </h5>
                    <form method="post" action="{{ route('references.update', $reference->id) }}">
                        <div class="form-group">
                            @csrf
                            @method('PATCH')
                            <label for="code">Code Référence :</label>
                            <input type="text" class="form-control" name="code" value="{{ $reference->code }}"/>
                        </div>
                        <div class="form-group">
                            <label for="short_description">Description courte Genre :</label>
                            <input type="text" class="form-control" name="short_description" value="{{ $reference->short_description }}"/>
                        </div>
                        <div class="form-group">
                            <label for="long_description">Description longue :</label>
                            <input type="text" class="form-control" name="long_description" value="{{ $reference->long_description }}"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix :</label>
                            <input type="text" class="form-control" name="price" value="{{ number_format($reference->price, 2) }}"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
