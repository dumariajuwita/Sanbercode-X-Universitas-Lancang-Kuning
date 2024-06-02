@extends('layouts.master')

@section('title')
    
@endsection

@section('content')
<form action="/cast/{{ $casts->id }}" method="post">
    {{-- validation --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- form input --}}
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>nama</label>
        <input type="text" class="form-control" name="nama" value="{{ $cast->nama }}">
    </div>
    <div class="form-group">
        <label>umur</label>
        <input type="text" class="form-control" name="umur" value="{{ $cast->umur }}">
    </div>
    <div class="form-group">
        <label>bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{ $cast->bio }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
