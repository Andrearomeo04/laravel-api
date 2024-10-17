@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">{{ $project->title }}</h2>
            <img class="img-show" src="{{ $project->image !== null ? asset('./storage/' . $project->image) : 'https://placehold.co/600x400?text=Immagine+copertina' }}" alt="">
            <h2>Descrizione</h2>
            <p>{{ $project->description }}</p>
            <p>{{ $project->type !== null ? $project->type->title : '' }}</p>
            <div class="d-flex">
                @forelse($project->technologies as $technology)
                <p class="pe-3">{{ $technology->title }}</p>
                @empty
                <p>Non è stata selezionata alcuna tecnologia per questo progetto</p>
                @endempty
            </div>
        </div>
    </div>
</div>
@endsection