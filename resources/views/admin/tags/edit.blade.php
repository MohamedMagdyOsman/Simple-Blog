@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Update tag
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.tags.update", $tag) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="required" for="name">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $tag->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block"> </span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection