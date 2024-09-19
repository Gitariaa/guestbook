@extends('layouts.app')

@section('content')
<div>
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Create New-Institution
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.institution.store')}}" method="POST" > 
                    @csrf
                    
                    <div class="form-group mb-3">
                        <label for="name" class="form-label"> Your Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name"  value ="{{ old('name') }}" class="form-control  @error('title') is-invalid @enderror" />
        
                        @error('name') 
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                <div>
                    <button type="submit" class="btn btn-success mb-1 "> Save </button>
                    <a href="{{route('admin.institution.index')}}" class="btn btn-primary mb-1"> Back </a>
                    <a href="{{route('admin.institution.index')}}" class="btn btn-secondary mb-1"> Cancel </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection