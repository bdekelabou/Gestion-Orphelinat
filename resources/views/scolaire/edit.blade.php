@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Modifier une scolaire</h1>
        <form action="{{ route('scolaire.update', $scolaire->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group