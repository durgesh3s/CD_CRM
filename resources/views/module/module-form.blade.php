@extends('layout.layout')

@section('title', 'Home')

@section('content')

<!-- Navigation Bar -->
<x-navigation-bar navtitle="CD CRM" />

<!-- Module Form -->
<div class="container">
    <form class="row g-3 mt-5" id="moduleForm">
        <div class="col-md-6">
            <label for="moduleName" class="form-label">Module Name</label>
            <input type="text" class="form-control" id="moduleName" name="name" required>
        </div>
        <div class="col-md-6">
            <label for="moduleEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="moduleEmail" name="email" required>
        </div>
        <div class="col-md-6">
            <label for="moduleOwner" class="form-label">Module Owner</label>
            <input type="text" class="form-control" id="moduleOwner" name="owner" required>
        </div>
        <div class="col-md-6">
            <label for="moduleCreatedBy" class="form-label">Created By</label>
            <input type="text" class="form-control" id="moduleCreatedBy" name="createdBy" required>
        </div>
        <div class="col-md-6">
            <label for="moduleOther" class="form-label">Other</label>
            <input type="text" class="form-control" id="moduleOther" name="other">
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Generate Module</button>
        </div>
    </form>
</div>


@endsection
