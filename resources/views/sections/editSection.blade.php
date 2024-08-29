@extends('layout.layout')
@section('title', 'Edit Section Page')
@section('content')


<x-navigation-bar navtitle="CD CRM" />



<div>
    <!-- Navbar Section -->
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <!-- Page Title -->
                <a href="javascript:void(0);" onclick="goBack()" class="navbar-brand text-black fw-bold fs-4">←
                    Contacts</a>
            </div>
            <!-- Action Buttons -->
            <form class="d-flex gap-2 my-3" action="javascript:void(0)">
                <button id="btnCancel" class="btn btn-outline-primary my-2 my-sm-0" type="button">Cancel</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="button">Save and New</button>
                <button id="btnSave" class="btn btn-outline-primary my-2 my-sm-0" type="button">Save</button>
                <!-- Modified Save Button -->
            </form>
        </div>
        <hr>
    </nav>
</div>


<style>
    .input-palette,
    .form-builder {
        border: 2px dashed #ccc;
    }

    .input-palette {
        width: 30%;
        height: 90%;
        float: left;
        margin-right: 2%;
    }

    .form-builder {
        width: 100%;
        height: auto;
        float: right;
    }

    .draggable {
        display: flex;
        justify-content: center;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #fff;
        border: 1px solid #ddd;
        cursor: move;
        border-radius: 8px;
        gap: 5px;
    }

    .draggable i {
        display: flex;
        align-items: center;
    }

    .draggable:hover {
        background-color: #e0e0e0;
    }
</style>
<div class="container my-4">
    <div class="row">
        <div class="input-palette">
            {{-- <div class="draggable" data-type="text">Text Field</div> --}}

            <div class="row">
                <div class="col-lg-20 mx-auto mb-3">
                    <!-- New Fields Section -->
                    <h5 class=" my-3 fw-semibold">New Fields</h5>
                    <div class="row gx-5 g-4">

                        <!-- Single Line Text Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="single-line">
                                <i class="fas fa-pencil-alt"></i> Single Line
                            </div>
                        </div>

                        <!-- Multi Line Text Input (Textarea) -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="multi-line">
                                <i class="fas fa-align-left"></i> Multi Line
                            </div>
                        </div>

                        <!-- Email Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="email">
                                <i class="fas fa-envelope"></i> Email
                            </div>
                        </div>

                        <!-- Phone Number Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="number">
                                <i class="fas fa-phone"></i> Phone
                            </div>
                        </div>

                        <!-- Number Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="number">
                                <i class="fas fa-hashtag"></i> Number
                            </div>
                        </div>

                        <!-- Pick List (Dropdown) -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="pick-list">
                                <i class="fas fa-list"></i> Pick List
                            </div>
                        </div>

                        <!-- Multi-Select Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="multi-select">
                                <i class="fas fa-tasks"></i> Multi-Select
                            </div>
                        </div>

                        <!-- Date Picker Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="date">
                                <i class="fas fa-calendar-alt"></i> Date
                            </div>
                        </div>

                        <!-- Date/Time Picker Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="datetime">
                                <i class="fas fa-clock"></i> Date/Time
                            </div>
                        </div>

                        <!-- Auto-Number Input (Read-Only) -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="auto-number">
                                <i class="fas fa-sort-numeric-down"></i> Auto-Number
                            </div>
                        </div>

                        <!-- Currency Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="currency">
                                <i class="fas fa-dollar-sign"></i> Currency
                            </div>
                        </div>

                        <!-- Decimal Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="decimal">
                                <i class="fas fa-percentage"></i> Decimal
                            </div>
                        </div>

                        <!-- Percentage Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="percentage">
                                <i class="fas fa-percent"></i> Percentage
                            </div>
                        </div>

                        <!-- Long Integer Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="long-integer">
                                <i class="fas fa-calculator"></i> Long Integer
                            </div>
                        </div>

                        <!-- Check Box -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="checkbox">
                                <i class="fas fa-check-square"></i> Check Box
                            </div>
                        </div>

                        <!-- URL Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="url">
                                <i class="fas fa-link"></i> URL
                            </div>
                        </div>

                        <!-- Lookup Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="lookup">
                                <i class="fas fa-search"></i> Lookup
                            </div>
                        </div>

                        <!-- Formula Field (Read-Only) -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="formula">
                                <i class="fas fa-calculator"></i> Formula
                            </div>
                        </div>

                        <!-- User Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="user">
                                <i class="fas fa-user"></i> User
                            </div>
                        </div>

                        <!-- File Upload Input -->
                        <div class="col-md-6">
                            <div class="draggable" data-type="file-upload">
                                <i class="fas fa-upload"></i> File Upload
                            </div>
                        </div>

                        <!-- Section Upload Input -->
                        <div>
                            <div class="draggable d-flex align-item-center justify-content-center"
                                id="section-draggable" data-type="section" style="cursor:copy;">
                                <i class="fas fa-plus-circle me-2"></i>New Section
                            </div>
                        </div>


                    </div> <!-- End of row -->
                </div> <!-- End of col-lg-8 -->
            </div> <!-- End of row -->
        </div>

        <form class="parent-form col" id="parent-form">
            <div class="col">

            </div>
        </form>
    </div>


    @endsection