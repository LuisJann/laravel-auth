@extends('layouts.admin')

@section('content')
    <h2>Crea un nuovo post</h2>
    <div class="row justify-content-center">
        <div class="col-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="title">Titolo</label>
                    <input type="text" id="title" name="title"
                        class="form-control @error('title')
                        is-invalid
                        @enderror"
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="content">Descrizione</label>
                    <textarea name="content" id="content" rows="10"
                        class="form-control @error('content')
                        is-invalid
                        @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
@endsection
