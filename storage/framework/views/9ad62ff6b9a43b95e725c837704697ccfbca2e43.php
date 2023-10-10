<?php $__env->startSection('title', 'User Dashboard'); ?>


<?php $__env->startSection('content'); ?>

<style>
    #numberExtraError{
        color:red;
    }
    #numberError{
        color:orange
    }
    #numberSuccess{
        color:green;
    }

    #qualificationSuccess{
        color:green;
    }
    #qualificationError{
        color:red;
    }
    #qualification12THSuccess{
        color:green;
    }
    #qualification12THError{
        color:red;
    }
    #qualification10THSuccess{
        color:green;
    }
    #qualification10THError{
        color:red;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12"></div>
        <div class="col-sm-12 mt-2">
            <div class="card shadow">
                <div class="card-header bg-warning"><i class="fa fa-user"></i> <b>your profile setting</b> </div>
                <div class="card-body bg-light">
                    <form id="myForm" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>
                                <div id="successMessage" class="alert alert-success" style="display: none;"></div>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">
                                <label for="name">Name:</label>
                                <input type="name" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>">
                                <label for="number">Phone:</label>
                             
                                <input type="number" class="form-control mt-2" name="phone" id="Number"  value="<?php echo e(!empty($userProfile->phone) ? $userProfile->phone : 'not Phone number'); ?>"  placeholder="Enter Phone number">
                                <span id="numberSuccess"></span>
                                <span id="numberExtraError"></span>
                                <span id="numberError"></span>
                             
                            </div>
                            <div class="form-group col-md-4">
                                <label for="image"></label>
                                <?php if(!empty($userProfile)): ?>
                                <img src="<?php echo e(URL:: asset('studentImage/'.$userProfile->userimage)); ?>" id="imagePreview" alt="Image Preview"
                                    style="width:200px; height:180px;">
                                <input type="file" id="imageInput"  name="userimage" class="form-control mt-2">

                                <?php else: ?>
                                <img src="<?php echo e(asset('assets/images/person_1.jpg')); ?>" id="imagePreview" alt="Image Preview"
                                    style="width:200px; height:180px;">
                                <input type="file" id="imageInput"  name="userimage" class="form-control mt-2">
                                <?php endif; ?>
                                

                            </div>
                            <div class="form-group col-4">
                                <label for="pwd">Higher Qualification:</label>
                                
                                <input type="text" class="form-control" id="Qualification"
                                    name="higher_qualification" value="<?php echo e(!empty($userProfile->higher_qualification) ? $userProfile->higher_qualification : 'Enter qualification MCA,BCA,BTECH'); ?>">
                                
                                <span id="qualificationSuccess"></span>
                                <span id="qualificationError"></span>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email">Qualification 12th:</label>
                                <input type="text" class="form-control" id="12TH" name="qualification12th" value="<?php echo e(!empty($userProfile->qualification12th) ? $userProfile->qualification12th : 'Enter after 10th CBSC..'); ?>">

                                    <span id="qualification12THSuccess"></span>
                                    <span id="qualification12THError"></span>
                            </div>
                            <div class="form-group col-4">
                                <label for="pwd">Qualification 10th:</label>
                                <input type="text" class="form-control" id="10TH" placeholder="Enter 10th class" name="qualification10th"
                                value="<?php echo e(!empty($userProfile->qualification10th) ? $userProfile->qualification10th : 'Enter after 10th CBSC..'); ?>">
                                <span id="qualification10THSuccess"></span>
                                <span id="qualification10THError"></span>
                            </div>
                            
                            <div class="form-group col-4">
                                <label for="country">Coutry Name:</label>
                                <input type="text" class="form-control" id="country" placeholder="Enter country name"
                                    name="country" value="<?php echo e(!empty($userProfile->country) ? $userProfile->country : 'Enter country name'); ?>">
                                    <span id="countrySuccess"></span>
                                    <span id="countryError"></span>
                            </div>
                            <div class="form-group col-4">
                                <label for="state">State Name:</label>
                                <input type="text" class="form-control" id="state" placeholder="Enter state" name="state">
                                    <span id="countrySuccess"></span>
                                    <span id="countryError"></span>
                            </div>
                            <div class="form-group col-4">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="postoffice">Post Office:</label>
                                <input type="text" class="form-control" id="POSTOFFICE" placeholder="Enter post office"
                                    name="postoffice">
                            </div>

                            <div class="form-group col-4">
                                <label for="pwd">PIN Number:</label>
                                <input type="text" class="form-control" id="pin" placeholder="Enter pin"  name="pin">
                            </div>
                            <div class="form-group col-4">
                                <label for="Experience">Experience keyword:</label>
                                <input type="text" class="form-control" id="Experience" placeholder="Enter Experience"
                                    name="experience"> 
                
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Address">Address:</label>
                                <textarea type="text" class="form-control" id="Address" placeholder="Enter Address"
                                    name="address"> </textarea>
                            </div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                            


                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Import jQuery -->

<script>
    $(document).ready(function () {
        var mobileInput = $('#Number');
        var numberSuccess = $('#numberSuccess');
        var numberError = $('#numberError');
        var numberExtraError = $('#numberExtraError');

        mobileInput.on('keyup', function () {
            var userNumber = mobileInput.val();
            console.log('Number is coming: ' + userNumber);
            
            // Use a regular expression to validate the phone number
            var phoneNumberPattern = /^[0-9]{10}$/;

            if (phoneNumberPattern.test(userNumber)) {
                numberSuccess.html('Mobile number is valid');
                numberError.html(''); // Clear other error messages
                numberExtraError.html(''); // Clear other error messages
                numberSuccess.fadeOut(2000);
            } else if (userNumber.length < 10) {
                numberExtraError.html('Mobile number should be 10 digits');
                numberSuccess.html('');
                numberError.html('');
            } else {
                numberError.html('Invalid mobile number');
                numberSuccess.html('');
                numberExtraError.html('');
            }
        });  
        
    
        // higher Qualification 
        $("#Qualification").on("keyup", function(){
            var QualificationValues = $(this).val();
            console.log('Qualification' + QualificationValues);
            if(QualificationValues > 3){
                $('#qualificationSuccess').html('Quliafication completed');
                $('#qualificationError').html('');
            }
            else{
                $('#qualificationError').html('Please fill min 2 digit required filed');
                $('#qualificationSuccess').html('');
                
            }
        })
    
        // 12TH Qualification 
        $("#12TH").on("keyup", function(){
            var qauli_12th = $(this).val();
            console.log('Qualification' + qauli_12th);
            if(qauli_12th > 3){
                $('#qualification12THSuccess').html('Quliafication completed');
                $('#qualification12THError').html('');
            }
            else{
                $('#qualification12THError').html('Please fill min 2 digit required filed');
                $('#qualification12THSuccess').html('');
                
            }
        })
        // 10TH Qualification 
        $("#10TH").on("keyup", function(){
            var qauli_10th = $(this).val();
            console.log('Qualification' + qauli_10th);
            if(qauli_10th > 5){
                $('#qualification10THSuccess').html('Quliafication completed');
                $('#qualification10THError').html('');
            }
            else{
                $('#qualification10THError').html('Please fill min 2 digit required filed');
                $('#qualification10THSuccess').html('');
                
            }
        })

        // Listen for changes in the file input
        $("#imageInput").on("change", function() {
            var inputFile = this;
            var imagePreview = $("#imagePreview")[0];
            if (inputFile.files && inputFile.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                };
                reader.readAsDataURL(inputFile.files[0]);
            }
        });

        $("#myForm").submit(function (event) {
    event.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this); // Create a FormData object with the form data

    $.ajax({
        url: "<?php echo e(route('profile.store')); ?>",
        type: 'POST',
        data: formData,
        contentType: false, // Set content type to false for FormData
        processData: false, // Set processData to false for FormData
        success: function (response) {
            if (response.status) {
                // Display the success message in a DOM element
                $('#successMessage').text(response.message).show().fadeOut(2000);
                $('#errorMessage').hide(); // Hide the error message
                // Clear the form or perform any other necessary actions
                $('#myForm')[0].reset();
            } else {
                // Display the error message in a DOM element
                $('#errorMessage').text(response.message).show();
                $('#successMessage').hide(); // Hide the success message
            }
        },
        error: function (xhr, status, error) {
            console.log('AJAX request failed');
        }
    });
});

    });  // document close here
    
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice-code\mycv\resources\views/user/profile-seeting.blade.php ENDPATH**/ ?>