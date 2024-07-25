@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            @include('shared.success')
            <div class="col-6 col-sm-8 col-lg-6">
                {{-- SE L IMMAGINE ESISTE ALLORA L STAMPIAMO --}}
                @if ($project->cover_image)
                    <img src="{{asset('storage/' . $project->cover_image)}}" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500"
                        loading="lazy">
                @endif
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">{{ $project->title }}</h1>
                <p class="lead">{{ $project->description }}</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                    <a class="btn btn-primary px-4 me-md-2" href="{{ route('admin.projects.index') }}">Torna alla lista dei
                        post</a>
                    <a class="btn btn-outline-secondary px-4" href="{{ route('admin.projects.edit', $project) }}">Modifica
                    </a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger px-4" data-bs-toggle="tooltip" title="Elimina"
                            onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Cancella </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
