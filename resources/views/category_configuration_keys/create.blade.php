@extends('layouts.app')

@section('content')
    <div class="container card">
        <form action="{{ route('category_configuration_keys.store') }}" method="POST" enctype= multipart/form-data>
            @csrf
            <div class="card-header">{{ __('Create Reservation') }}</div>

            <div class="card-body">

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="description">{{ __('Name') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" id="name" name="name"  placeholder="{{ __('Name') }}" >{{old('name')}}</input>
                        @error('name')
                        <span style=color:red>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="size">{{ __('Extra') }}</label>
                    </div>
                    <div class="col-md-6">
                        <textarea type="text" class="form-control" id="extra" name="extra" value="{{old('extra')}}" placeholder="{{ __('Extra') }}" ></textarea>
                        @error('extra')
                        <span style=color:red>{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-8 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
