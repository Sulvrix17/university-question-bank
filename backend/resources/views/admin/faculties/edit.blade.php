@extends('layouts.dashboard')

@section('content')
    <div class="container mt-5">
        <div class="card p-4">
            <h1>Edit Faculty</h1>
            <hr class="mb-5 mt-0 border border-primary-subtle border-3 opacity-50">
            <form method="POST" action="{{ route('faculties.update', $faculty->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $faculty->name }}"
                        required>
                    @if ($errors->has('name'))
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="university" class="form-label">University:</label>
                    <select class="form-control" id="university" name="university_id" required>
                        @foreach ($universities as $university)
                            <option value="{{ $university->id }}"
                                {{ $university->id == $faculty->university_id ? 'selected' : '' }}>
                                {{ $university->name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('university_id'))
                        <div class="text-danger">{{ $errors->first('university_id') }}</div>
                    @endif
                </div>

                <div class="d-flex align-items-center justify-content-center gap-3">
                    <a class="btn btn-secondary" href="{{ '/dashboard' }}" role="button">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
