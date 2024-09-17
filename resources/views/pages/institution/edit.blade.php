@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-pencil"></span>
            Edit - Institution
        </h3>
        
    </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.institution.update', $institutions->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-2">
                            <form action="{{ route('admin.institution.update', $institutions->id) }}" method="POST">
                            <input type="text" name="name" id="name" value="{{ $institutions->name }}" class="form-control @error('name') is-invalid @enderror" />
                                
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                        <a href="{{route('admin.institution.index')}}" class="btn btn-secondary"> Kembali </a>

                        <button type="submit" class="btn btn-primary">Simpan</button>

                        <a href="{{ route('admin.institution.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
</div>
@endsection