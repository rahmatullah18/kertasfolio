@extends('layouts.app')

@section('title', 'Informatica Categori Source Code')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                   <livewire:sourcecode.source-code-back-end-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection