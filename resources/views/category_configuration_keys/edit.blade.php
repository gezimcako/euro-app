@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-card">
            <form action="{{url('category_configuration_keys_update/'.$categoryConfigurationKey->id) }}" method="Post">
                @csrf
                @method('put')

                <div>
                    <h2>Update task</h2>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Configuration Name') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input value="{{$categoryConfigurationKey->name}}" type="text" class="form-control" id="title" name="name" disabled>

                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Configuration Extra') }}</label>
                    </div>
                    <div class="col-md-6">
                        <textarea value="{{$categoryConfigurationKey->extra}}" type="text" class="form-control" id="title" name="extra"></textarea>
                        @error('extra')
                        <p class="invalid-feedback d-block" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-8 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </div>
    </form>
    </div>
    </div>
@endsection
