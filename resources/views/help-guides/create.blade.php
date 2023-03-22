@extends('layouts.app')

@section('title', 'Add Help Guide')

@section('content')
<div class="container">

    <div class="help">
        <h1>Add Help Guide</h1>

        <div class="row">
            <div class="col-md-12">

                <form method="POST" action="{{ route('help-guides.store') }}">
                    @csrf
                    <div>
                        <label for="link">Link:</label>
                        <input type="text" name="link" id="link" value="{{ old('link') }}">
                        @error('link')
                            <p>* {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="description">Description:</label>
                        <textarea name="description" id="description">{{ old('description') }}</textarea>
                        @error('description')
                            <p>* {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-info">Submit Help Guide</button>
                    </div>
                </form>

            </div>
        </div>
        
    </div>
</div>
@endsection