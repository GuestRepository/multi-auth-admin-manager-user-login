@extends('layouts.user-master')
@section('title', 'CV Create')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="container">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2>Cv Wizard</h2>
                        </div>
                        <div class="card-body">
                            <!-- wizard open -->
                            <form id="wizard-form" method="post" action=""enctype="multipart/form-data">
                                @csrf
                                <div class="step" data-step="1">
                                    <h2>Persional Details</h2>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">User Name </span>
                                        </div>
                                        <input type="text" class="form-control" name="user_name" placeholder="Recipient's username">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Email ID </span>
                                        </div>
                                        <input type="text" class="form-control" name="user_email" placeholder="Recipient's email id">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Mobile Number </span>
                                        </div>
                                        <input type="text" class="form-control" name="mobile_number" placeholder="Recipient's mobile number">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">DOB </span>
                                        </div>
                                        <input type="text" class="form-control" name="user_dob" placeholder="Recipient's date of birth">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Profile Pic </span>
                                        </div>
                                        <input type="file" class="form-control" name="user_avatar" placeholder="Recipient's avatar">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <button class="next-step btn btn-info">Next</button>
                                    </div>
                                </div>


                                <div class="step" data-step="2">
                                    <h2>Address Details</h2>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Pin Number </span>
                                        </div>
                                        <input type="text" class="form-control" name="pin_number" placeholder="Recipient's pin number">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Country Name </span>
                                        </div>
                                        <input type="text" class="form-control" name="country_name" placeholder="Recipient's country name">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">State Name </span>
                                        </div>
                                        <input type="text" class="form-control" name="state_name" placeholder="Recipient's state name">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">City Name </span>
                                        </div>
                                        <input type="text" class="form-control" name="city_name" placeholder="Recipient's city name">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Address </span>
                                        </div>
                                        <input type="text" class="form-control" name="address" placeholder="Recipient's address">
                                    </div>


                                    <div class="col-md-12 mt-2">
                                        <button class="prev-step btn btn-info">Previous</button>
                                        <button class="next-step btn btn-info">Next</button>
                                    </div>
                                </div>

                                <div class="step" data-step="3">
                                    <h2>Social Address</h2>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">LinkedIn Id </span>
                                        </div>
                                        <input type="text" class="form-control" name="linkedin" placeholder="Recipient's linkedin id">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">GitHub Id </span>
                                        </div>
                                        <input type="text" class="form-control" name="github" placeholder="Recipient's linkedin id">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Facebook Id </span>
                                        </div>
                                        <input type="text" class="form-control" name="facebook" placeholder="Recipient's facebook id">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Instagram Id </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Recipient's instagram id">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Twitter Id </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Recipient's twitter id">
                                    </div>


                                    <button class="prev-step btn btn-info">Previous</button>
                                    <button class="next-step btn btn-info">Next</button>
                                </div>

                                <div class="step" data-step="4">
                                    <h2>Education Details</h2>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Highest Degree </span>
                                        </div>
                                        <input type="text" class="form-control"
                                            placeholder="Recipient's BE.TECH , BE,MCA">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">12th Pass </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Recipient's CBSC BOARD">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"> 10th Board</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Recipient's CBSC">
                                    </div>

                                    <button class="prev-step btn btn-info">Previous</button>
                                    <button class="next-step btn btn-info">Next</button>
                                </div>

                                <div class="step" data-step="5">
                                    <h2>Company Exprience</h2>
                                    
                                    <div class="row" id="accordion-body-Exchange">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Company Name </span>
                                            </div>
                                            <input type="text" class="form-control" name="company_name[]" placeholder="Recipient's TCS,IBM">
                                        </div>
                                        <input type="text" name="user_id" value="{{(Auth::user()->id)}}">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Key Skils </span>
                                            </div>
                                            <input type="text" class="form-control" name="key_skil[]"
                                                placeholder="Recipient's java,php,C++">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Team Size </span>
                                            </div>
                                            <input type="text" class="form-control" name="team_size[]" placeholder="Recipient's team size">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"> Join Date to</span>
                                            </div>
                                            <input type="date" class="form-control" name="join_date[]"
                                                placeholder="Recipient's start date">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"> End Date to</span>
                                            </div>
                                            <input type="date" class="form-control" name="end_date[]"
                                                placeholder="Recipient's start date">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3"> Expreience Certificate </span>
                                            </div>
                                            <input type="file" name="exp_certificate[]" class="form-control" placeholder="Recipient's exp certificate">
                                        </div>
                                    </div>
                                    <button class="prev-step btn btn-info">Previous</button>
                                    <a class="btn btn-outline-primary add-icon" id="add-ExchangeName"> + Add Experience </a>
                                  
                                    <button type="submit" class="btn btn-success">Submit</button>


                                </div>
                            </form>
                            <!-- wizard close -->
                        </div>
                    </div>
                </div>


            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script src="{{ asset('assets/admin/admin-css/jquery.slim.min.js') }}"></script>
            <script>
                // Use $j instead of $ for jQuery operations
                var $j = jQuery.noConflict();

                $j(document).ready(function () {
                    var currentStep = 1;

                    // Function to show the current step and hide others
                    function showStep(step) {
                        $('.step').hide();
                        $('[data-step="' + step + '"]').show();
                    }

                    // Initialize: show the first step
                    showStep(currentStep);

                    // Next button click handler
                    $('.next-step').click(function (e) {
                        e.preventDefault();
                        currentStep++;
                        showStep(currentStep);
                    });

                    // Previous button click handler
                    $('.prev-step').click(function (e) {
                        e.preventDefault();
                        currentStep--;
                        showStep(currentStep);
                    });
                });

                // Add company experience section
                $j(document).ready(function () {
                    $(".delete-ExchangeName").hide();

                    // When the Add Field button is clicked
                    $("#add-ExchangeName").click(function (e) {
                        $(".delete-ExchangeName").fadeIn("1500");

                        // Append a new row of code to the "#accordion-body-Exchange" div
                        $("#accordion-body-Exchange").append(`
                            <div class="container-fluid mt-2 mb-2">
                            <div class="row" id="companyExperience-remo">
                                <div class="col-md-12">
                                    <div class="card shadow">  
                                        <div class="card-header">
                                        <a href="#" class="close-icon delete-ExchangeName text-danger"><img src="{{ asset('assets/cv-img/trash-icon.svg') }}" style="height:30px; width:30px;"></a> 
                                        </div>
                                        <div class="card-body">  
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Company Name </span>
                                                </div>
                                                <input type="text" class="form-control" name="company_name[]" placeholder="Recipient's TCS,IBM">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Key Skils </span>
                                                </div>
                                                <input type="text" class="form-control" name="key_skil[]" placeholder="Recipient's java,php,C++">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">Team Size </span>
                                                </div>
                                                <input type="text" class="form-control" name="team_size[]"  placeholder="Recipient's team size">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"> Join Date to</span>
                                                </div>
                                                <input type="date" class="form-control" name="start_date[]" placeholder="Recipient's start date">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"> End Date </span>
                                                </div>
                                                <input type="date" class="form-control" name="end_date[]" placeholder="Recipient's end date">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"> Expreience Certificate </span>
                                                </div>
                                                <input type="file" class="form-control" placeholder="Recipient's exp certificate">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>`);
                    });

                    // Remove the last added row when the "Remove Brand Name" button is clicked
                    $("body").on("click", ".delete-ExchangeName", function (e) {
                        $("#companyExperience-remo").last().remove();
                    });
                });

            </script>


        </div>

    </div>
</div>


@endsection
