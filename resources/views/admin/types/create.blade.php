@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('admin.types.partials.form', [
            'method' => 'POST',
            'routeName' => 'admin.projects.store',
        ])
    </div>
@endsection
