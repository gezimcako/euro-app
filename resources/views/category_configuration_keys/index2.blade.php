

@extends('layouts.app')

@section('content')
    <h1 class="p-3 title" style="background-color: #D3D3D3">Category Configuration Keys</h1>
    <div class="mt-5">
        <div class=" row d-flex">
            <div class="col-6 ">
                <form action="{{ route('category_configuration_keys.create') }}">
                    <button type="submit" class="btn btn-secondary">Create Category Configuration Key</button>
                </form>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ Request::get('name') }}">
            </div>
        </div>
        <table class="table table-striped mt-4">
            <header>
                <th>ID</td>
                <th>NAME</td>
                <th>EXTRA</td>
                <th>Number</td>
            </header>
            @foreach ($categoryConfigurationKeys as $categoryConfigurationKey)
                <tr>
                    <td>{{ $categoryConfigurationKey->id }}</td>
                    <td>{{ $categoryConfigurationKey->name }}</td>
                    <td>{{ $categoryConfigurationKey->extra }}</td>
                    <td><a href="{{ route('category_configuration_keys.edit', ['id' => $categoryConfigurationKey->id]) }}"><i class="fa fa-eye" style="font-size:24px"></i></a>
                        {{--                       <form action="{{ route('category_configuration_keys.destroy', [$categoryConfigurationKey->id]) }}" method="post">--}}
                        {{--                            @method('DELETE')--}}
                        {{--                            @csrf--}}
                        {{--                            <button type="submit" class="fa fa-trash-o" style="font-size:24px"></button>--}}
                        {{--                      </form>--}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
