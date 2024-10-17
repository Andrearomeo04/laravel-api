@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Modifica</h2>
        </div>
        <div class="col-12">
        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">Immagine</label>
                        <input type="file" name="image" id="" class="form-control" placeholder="Seleziona un immagine..." value="{{ old('image') }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Nome del Progetto</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Nome del Progetto" value="{{ old('title') }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Tipologia Progetto</label>
                        <select name="type_id" class="form-select" id="" required>
                            <option value="">seleziona la tipologia</option>
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}" @selected($type->id == old('type_id', $project->type ? $project->type->id : ''))>{{ $type->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Descrizione</label>
                        <textarea name="description" id="" cols="25" row="10" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection