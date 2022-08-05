@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido al crud de laravel 9') }}
                    <a href="{{ url('/products') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">Cargar productos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
