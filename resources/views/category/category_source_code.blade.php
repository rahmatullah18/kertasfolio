@extends('layouts.app')

@section('title', 'Informatica Categori Source Code')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <livewire:category.category-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection