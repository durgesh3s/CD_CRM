@extends('layout.layout')
@section('title', 'Edit Section Page')
@section('content')


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
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cancel</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Save and New</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Save</button>
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
                            <div class="draggable" data-type="phone">
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
                        <div class="col-md-6">
                            <div class="draggable" id="section-draggable" data-type="section" style="cursor:copy;">Section</div>
                        </div>


                    </div> <!-- End of row -->
                </div> <!-- End of col-lg-8 -->
            </div> <!-- End of row -->
        </div>

        <section class="parent-section col" id="parent-section">
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
                                        <input type="text" name="other-city" id="other-city"
                                            class="form-control phone-mask" placeholder="" />
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
                                        <input type="text" name="other-zip" id="other-zip"
                                            class="form-control phone-mask" placeholder="" />
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
                                    <input type="text" name="long-int1" class="form-control" id="long-int1"
                                        placeholder="" style="height: 40px;"></input>
                                    <label for="long-int1">Long Integer 1</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-builder mb-4 p-4">
                        <h5 class="fw-semibold">Description Information</h5>
                        <div class="d-grid gap-3">
                        </div>
                    </div>


            </div>
        </section>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            // Make the draggable elements
            $('.draggable').draggable({
                helper: 'clone'
            });

            // Make the form builder area droppable
            $('.form-builder').droppable({
                accept: '.draggable',
                drop: function (event, ui) {
                    var fieldType = ui.helper.data('type');
                    // console.log('drop', fieldType)
                    var fieldHtml = '';

                    // Determine the HTML to add based on the field type
                    switch (fieldType) {
                        case 'single-line':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Single Line: </label>' +
                                '<input type="text" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'multi-line':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Multi Line: </label>' +
                                '<textarea name="text[]" class="form-control" rows="2" style="height: 65px;"></textarea>' +
                                '</div>';
                            break;
                        case 'email':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Email: </label>' +
                                '<input type="email" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'number':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Number: </label>' +
                                '<input type="number" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'pick-list':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Pick List: </label>' +
                                '<select name="text[]" class="form-control">' +
                                '<option value="Option 1">Option 1</option>' +
                                '<option value="Option 2">Option 2</option>' +
                                '</select>' +
                                '</div>';
                            break;
                        case 'multi-select':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Multi-Select: </label>' +
                                '<select name="text[]" class="form-control" multiple>' +
                                '<option value="Option 1">Option 1</option>' +
                                '<option value="Option 2">Option 2</option>' +
                                '</select>' +
                                '</div>';
                            break;
                        case 'date':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Date: </label>' +
                                '<input type="date" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'datetime':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Date/Time: </label>' +
                                '<input type="datetime-local" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'auto-number':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Auto-Number: </label>' +
                                '<input type="text" name="text[]" class="form-control" readonly>' +
                                '</div>';
                            break;
                        case 'currency':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Currency: </label>' +
                                '<input type="text" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'decimal':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Decimal: </label>' +
                                '<input type="number" step="0.01" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'percentage':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Percentage: </label>' +
                                '<input type="number" step="0.01" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'long-integer':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Long Integer: </label>' +
                                '<input type="number" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'checkbox':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Check Box: </label>' +
                                '<input type="checkbox" name="text[]" class="form-check-input">' +
                                '</div>';
                            break;
                        case 'url':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">URL: </label>' +
                                '<input type="url" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'lookup':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Lookup: </label>' +
                                '<input type="text" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'formula':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">Formula: </label>' +
                                '<input type="text" name="text[]" class="form-control" readonly>' +
                                '</div>';
                            break;
                        case 'user':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">User: </label>' +
                                '<input type="text" name="text[]" class="form-control">' +
                                '</div>';
                            break;
                        case 'file-upload':
                            fieldHtml = '<div class="dropped-field mb-3">' +
                                '<label class="form-label editable-label">File Upload: </label>' +
                                '<input type="file" name="file[]" class="form-control">' +
                                '</div>';
                            break;
                        default:
                            fieldHtml = '';
                    }


                    var $fieldElement = $(fieldHtml);

                    // Append the field to the form builder area
                    $(this).append($fieldElement);

                    // Allow editing the label once after dropping
                    $fieldElement.find('.editable-label').one('click', function () {
                        var $label = $(this);
                        var currentText = $label.text();
                        var $input = $('<input type="text" class=" label-edit-input" value="' + currentText + '" />');

                        // Replace label with input for editing
                        $label.replaceWith($input);

                        // Handle focus out or enter key to finalize the edit
                        $input.focus().on('blur keyup', function (e) {
                            if (e.type === 'blur' || (e.type === 'keyup' && e.key === 'Enter')) {
                                var newText = $input.val() || 'Single Line: ';
                                $input.replaceWith('<label class="form-label">' + newText + '</label>');
                            }
                        });
                    });
                }
            });
        });
    </script>

    <script>
        // $(document).ready(function () {
        //     // Make the draggable elements
        //     $('#section-draggable').draggable({
        //         helper: 'clone'
        //     });

        //     // Make the form builder area droppable
        //     $('#parent-section').droppable({
        //         accept: '#section-draggable',
        //         drop: function (event, ui) {
        //             var sectionType = ui.helper.data('type');
        //             console.log("Section Type:", sectionType);
        //             var fieldHtml = '';


        //             switch (sectionType) {
        //                 case 'section':
        //                     fieldHtml = '<div class="form-builder mb-4 p-4">' +
        //                         '<h5 class="fw-semibold">Description Information</h5>' +
        //                         '<div class="d-grid gap-3"></div>' +
        //                         '</div>';
        //                     break;
        //             }


        //             var $fieldElement = $(fieldHtml);

        //             // Append the field to the form builder area
        //             $(this).append($fieldElement);
        //         }
        //     });
        // });
    </script>

    <script>
        $(document).ready(function () {
    // Handle click on the draggable element
    $('#section-draggable').on('click', function () {
        // Retrieve the section type from the data-type attribute
        var sectionType = $(this).data('type');
        console.log("Section Type:", sectionType);  // Debugging output

        var fieldHtml = '';

        // Determine the HTML to add based on the section type
        switch (sectionType) {
            case 'section':
                fieldHtml = '<div class="form-builder mb-4 p-4">' +
                            '<h5 class="fw-semibold">Description Information</h5>' +
                            '<div class="d-grid gap-3"></div>' +
                            '</div>';
                break;
            default:
                console.log("No matching section type found");  // If no case matches
        }

        if (fieldHtml !== '') {
            var $fieldElement = $(fieldHtml);
            console.log("Generated Field Element:", $fieldElement);  // Debugging output

            // Append the field to the form builder area (droppable area)
            $('#parent-section').append($fieldElement);
            console.log("Element appended successfully");
        } else {
            console.log("No HTML generated for this section type.");
        }
    });
});

    </script>




    <!-- JavaScript to handle back navigation -->
    <script>
        function goBack() {
            // Pop the current page from the stack and navigate to the previous page
            history.back();
        }
    </script>

    @endsection