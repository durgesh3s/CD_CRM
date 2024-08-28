@extends('layout.layout')
@section('title', 'Section Page')
@section('content')

<div>
    <!-- Navbar Section -->
    <nav class="navbar bg-white top-0 position-sticky"  style="z-index: 100;">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <!-- Page Title -->
                <a class="navbar-brand text-black fw-bold fs-4">Create Account</a>
                <!-- Edit Page Layout Link -->
                <a href="" class="ms-3 text-decoration-underline">Edit Page Layout</a>
            </div>
            <!-- Action Buttons -->
            <form class="d-flex gap-2 my-3" action="javascript:void(0)">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cancel</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Save and New</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Save</button>
            </form>
        </div>
    </nav>    

    <!-- Main Content Section -->
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <!-- Contact Information Section -->
                            <h5 class="mb-8 my-8 fw-semibold">Contact Information</h5>
                            <div class="row gx-10 g-4">

                                <!-- Contact Owner -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="contact-owner" name="contact-owner" class="form-control" placeholder="Durgesh Singh" />
                                        <label for="contact-owner">Contact Owner</label>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" name="email" type="text" id="email" name="email" placeholder="durgesh.singh" aria-label="john.doe" aria-describedby="email3" />
                                            <label for="email">Email</label>
                                        </div>
                                        <span class="input-group-text" id="email3">@collegedunia.com</span>
                                    </div>
                                </div>

                                <!-- Contact Number -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="number" id="phone-number" name="phone-number" class="form-control phone-mask" placeholder="+91-6393313101" aria-label="658 799 8941" />
                                        <label for="phone-number">Contact Number</label>
                                    </div>
                                </div>

                                <!-- Alternate Number -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="number" id="alt-num" name="alt-num" class="form-control phone-mask" placeholder="+91-969651010" />
                                        <label for="alt-num">Alternate Number</label>
                                    </div>
                                </div>

                                <!-- Account Name -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="account-name" name="account-name" class="form-control phone-mask" placeholder="Collegedunia" />
                                        <label for="account-name">Account Name</label>
                                    </div>
                                </div>

                                <!-- Title -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="title" name="title" class="form-control phone-mask" placeholder="Software Developer" />
                                        <label for="title">Title</label>
                                    </div>
                                </div>

                                <!-- Department -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="department" name="department" class="form-control phone-mask" placeholder="Software Developer" />
                                        <label for="department">Department</label>
                                    </div>
                                </div>

                                <!-- Skype ID -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="skype-id" name="skype-id" class="form-control phone-mask" placeholder="live:durgesh.singh123" />
                                        <label for="skype-id">Skype ID</label>
                                    </div>
                                </div>

                                <!-- Assistant -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="assistant" name="assistant" class="form-control phone-mask" placeholder="" />
                                        <label for="assistant">Assistant</label>
                                    </div>
                                </div>

                                <!-- Secondary Email -->
                                <div class="col-md-6">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" type="text" name="secondary-email" id="secondary-email" name="secondary-email" placeholder="durgesh.sde" aria-label="john.doe" aria-describedby="email3" />
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
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="file" name="upload-data" id="upload-data" class="form-control phone-mask" />
                                        <label for="upload-data">Upload Data</label>
                                    </div>
                                </div>

                                <!-- Address Information Section -->
                                <h5 class="mb-4 my-4 fw-semibold">Address Information</h5>

                                <!-- Mailing Street -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="mailing-street" id="mailing-street" class="form-control phone-mask" placeholder="" />
                                        <label for="mailing-street">Mailing Street</label>
                                    </div>
                                </div>

                                <!-- Other Street -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="other-street" id="other-street" class="form-control phone-mask" placeholder="" />
                                        <label for="other-street">Other Street</label>
                                    </div>
                                </div>

                                <!-- Mailing City -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="mailing-city" id="mailing-city" class="form-control phone-mask" placeholder="" />
                                        <label for="mailing-city">Mailing City</label>
                                    </div>
                                </div>

                                <!-- Other City -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="other-city" id="other-city" class="form-control phone-mask" placeholder="" />
                                        <label for="other-city">Other City</label>
                                    </div>
                                </div>

                                <!-- Mailing State -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="mailing-state" id="mailing-state" class="form-control phone-mask" placeholder="" />
                                        <label for="mailing-state">Mailing State</label>
                                    </div>
                                </div>

                                <!-- Other State -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="other-state" id="other-state" class="form-control phone-mask" placeholder="" />
                                        <label for="other-state">Other State</label>
                                    </div>
                                </div>

                                <!-- Mailing Zip -->
                                <div class="col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="mailing-zip" id="mailing-zip" class="form-control phone-mask" placeholder="" />
                                        <label for="mailing-zip">Mailing Zip</label>
                                    </div>
                                </div>

                                <!-- Other Zip -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="other-zip" id="other-zip" class="form-control phone-mask" placeholder="" />
                                        <label for="other-zip">Other Zip</label>
                                    </div>
                                </div>

                                <!-- Description Information Section -->
                                <h5 class="fw-semibold">Description Information</h5>

                                <!-- Description -->
                                <div class="col-12">
                                    <div class="form-floating form-floating-outline">
                                        <textarea name="description" class="form-control" id="description" rows="2" placeholder="" style="height: 65px;"></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div>

                                <!-- Long Integer 1 -->
                                <div class="col-12 mb-10">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" name="long-int1" class="form-control" id="long-int1" placeholder="" style="height: 40px;"></input>
                                        <label for="long-int1">Long Integer 1</label>
                                    </div>
                                </div>

                            </div> <!-- End of row -->
                        </div> <!-- End of col-lg-8 -->
                    </div> <!-- End of row -->
                </div> <!-- End of card-body -->
            </div> <!-- End of col-12 -->
        </div> <!-- End of row -->
    </div> <!-- End of main content section -->
</div> <!-- End of outer div -->

<script>
    function goBack() {
        // Pop the current page from the stack and navigate to the previous page
        history.back();
    }
</script>
@endsection