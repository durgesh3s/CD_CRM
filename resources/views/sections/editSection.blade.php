@extends('layout.layout')
@section('title', 'Edit Section Page')
@section('content')


<div>
    <!-- Navbar Section -->
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <!-- Page Title -->
                <a href="javascript:void(0);" onclick="goBack()" class="navbar-brand text-black fw-bold fs-4">← Contacts</a>
            </div>
            <!-- Action Buttons -->
            <form class="d-flex gap-2 my-3" action="javascript:void(0)">
                <button id="btnCancel" class="btn btn-outline-primary my-2 my-sm-0" type="button">Cancel</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="button">Save and New</button>
                <button id="btnSave" class="btn btn-outline-primary my-2 my-sm-0" type="button">Save</button> <!-- Modified Save Button -->
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
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        cursor: move;
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
                            <div class="draggable d-flex align-item-center justify-content-center" id="section-draggable" data-type="section" style="cursor:copy;">
                                <i class="fas fa-plus-circle me-2"></i>New Section</div>
                        </div>


                    </div> <!-- End of row -->
                </div> <!-- End of col-lg-8 -->
            </div> <!-- End of row -->
        </div>

        <form class="parent-section col" id="parent-section">
            <div class="col">
                <div class="form-builder mb-4 p-4">
                    <h5 class="fw-semibold">Contact Information</h5>
                    <div class="d-grid gap-3">
                        <div class="row gx-10 g-4">

                            <!-- Contact Owner -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="contact-owner" name="contact-owner" class="form-control"
                                        placeholder="Durgesh Singh" />
                                    <label for="contact-owner">Contact Owner</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" name="email" type="text" id="email" name="email"
                                            placeholder="durgesh.singh" aria-label="john.doe"
                                            aria-describedby="email3" />
                                        <label for="email">Email</label>
                                    </div>
                                    <span class="input-group-text" id="email3">@collegedunia.com</span>
                                </div>
                            </div>

                            <!-- Contact Number -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" id="phone-number" name="phone-number"
                                        class="form-control phone-mask" placeholder="+91-6393313101"
                                        aria-label="658 799 8941" />
                                    <label for="phone-number">Contact Number</label>
                                </div>
                            </div>

                            <!-- Alternate Number -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="number" id="alt-num" name="alt-num" class="form-control phone-mask"
                                        placeholder="+91-969651010" />
                                    <label for="alt-num">Alternate Number</label>
                                </div>
                            </div>

                            <!-- Account Name -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="account-name" name="account-name"
                                        class="form-control phone-mask" placeholder="Collegedunia" />
                                    <label for="account-name">Account Name</label>
                                </div>
                            </div>

                            <!-- Title -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="title" name="title" class="form-control phone-mask"
                                        placeholder="Software Developer" />
                                    <label for="title">Title</label>
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="department" name="department" class="form-control phone-mask"
                                        placeholder="Software Developer" />
                                    <label for="department">Department</label>
                                </div>
                            </div>

                            <!-- Skype ID -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="skype-id" name="skype-id" class="form-control phone-mask"
                                        placeholder="live:durgesh.singh123" />
                                    <label for="skype-id">Skype ID</label>
                                </div>
                            </div>

                            <!-- Assistant -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" id="assistant" name="assistant" class="form-control phone-mask"
                                        placeholder="" />
                                    <label for="assistant">Assistant</label>
                                </div>
                            </div>

                            <!-- Secondary Email -->
                            <div class="col-md-6">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="secondary-email"
                                            id="secondary-email" name="secondary-email" placeholder="durgesh.sde"
                                            aria-label="john.doe" aria-describedby="email3" />
                                        <label for="secondary-email">Secondary Email</label>
                                    </div>
                                    <span class="input-group-text" id="email3">@gmail.com</span>
                                </div>
                            </div>

                            <!-- Date of Birth -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="date" id="dob" name="dob" class="form-control phone-mask" />
                                    <label for="dob">Date of Birth</label>
                                </div>
                            </div>

                            <!-- File Upload -->
                            <div class="col-md-6 mb-3">
                                <div class="form-floating form-floating-outline">
                                    <input type="file" name="upload-data" id="upload-data"
                                        class="form-control phone-mask" />
                                    <label for="upload-data">Upload Data</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-builder mb-4 p-4">
                    <h5 class="fw-semibold">Contact Information</h5>
                    <div class="d-grid gap-3">
                        <div class="row gx-10 g-4">
                            <!-- Mailing Street -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="mailing-street" id="mailing-street"
                                        class="form-control phone-mask" placeholder="" />
                                    <label for="mailing-street">Mailing Street</label>
                                </div>
                            </div>

                            <!-- Other Street -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="other-street" id="other-street"
                                        class="form-control phone-mask" placeholder="" />
                                    <label for="other-street">Other Street</label>
                                </div>
                            </div>

                            <!-- Mailing City -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="mailing-city" id="mailing-city"
                                        class="form-control phone-mask" placeholder="" />
                                    <label for="mailing-city">Mailing City</label>
                                </div>
                            </div>

                            <!-- Other City -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="other-city" id="other-city" class="form-control phone-mask"
                                        placeholder="" />
                                    <label for="other-city">Other City</label>
                                </div>
                            </div>

                            <!-- Mailing State -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="mailing-state" id="mailing-state"
                                        class="form-control phone-mask" placeholder="" />
                                    <label for="mailing-state">Mailing State</label>
                                </div>
                            </div>

                            <!-- Other State -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="other-state" id="other-state"
                                        class="form-control phone-mask" placeholder="" />
                                    <label for="other-state">Other State</label>
                                </div>
                            </div>

                            <!-- Mailing Zip -->
                            <div class="col-md-6">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="mailing-zip" id="mailing-zip"
                                        class="form-control phone-mask" placeholder="" />
                                    <label for="mailing-zip">Mailing Zip</label>
                                </div>
                            </div>

                            <!-- Other Zip -->
                            <div class="col-md-6 mb-3">
                                <div class="form-floating form-floating-outline">
                                    <input type="text" name="other-zip" id="other-zip" class="form-control phone-mask"
                                        placeholder="" />
                                    <label for="other-zip">Other Zip</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-builder mb-4 p-4">
                    <h5 class="fw-semibold">Description Information</h5>
                    <div class="d-grid gap-3">
                        <!-- Description -->
                        <div class="col-12">
                            <div class="form-floating form-floating-outline">
                                <textarea name="description" class="form-control" id="description" rows="2"
                                    placeholder="" style="height: 65px;"></textarea>
                                <label for="description">Description</label>
                            </div>
                        </div>

                        <!-- Long Integer 1 -->
                        <div class="col-12 mb-3">
                            <div class="form-floating form-floating-outline">
                                <input type="text" name="long-int1" class="form-control" id="long-int1" placeholder=""
                                    style="height: 40px;"></input>
                                <label for="long-int1">Long Integer 1</label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Event listener for Save button
            document.getElementById('btnSave').addEventListener('click', function () {
                // Initialize an array to store form data
                let formDataArray = [];
    
                // Select all form fields within the <form> element with the id 'parent-section'
                const formFields = document.querySelectorAll('#parent-section input, #parent-section textarea, #parent-section select');
    
                // Loop through each form field
                formFields.forEach(field => {
                    // Find the corresponding label for the field
                    const label = field.closest('.form-floating') ? field.closest('.form-floating').querySelector('label') : null;
                    
                    // Add an object with field type and label text to the array
                    formDataArray.push({
                        type: field.type,
                        label: label ? label.innerText : 'No Label'
                    });
                });
    
                // Store the array in session storage
                sessionStorage.setItem('formDataArray', JSON.stringify(formDataArray));
    
                // Redirect to a new page where the dynamic form will be generated
                window.location.href = "{{ route('dynamic-form') }}"; // Update this route to your dynamic form route
            });
        });
    </script>

    
    @endsection