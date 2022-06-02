<section class="" id="toppage" style="margin-top:60px;text-align:center">
    <div class="" style="background-image:url('<?php echo FRONT_IMAGES; ?>bg.jpg');height:100px;">
        <div class="row justify-content-center">

        </div>
    </div>
</section>
<section class="" style="text-align:center">

    <div class="">
        <div class="row justify-content-center">
            <div>

                <h2 class="mb-4 display-5">Career Form</h2>
                <div class="">
                    <div style="margin: auto;width: 80%;" id="formcareer">
                        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                        <form id="fupForm" class="form-horizontal" role="form" method="post" enctype=multipart/form-data>
                            <div class="form-group">
                                <label for="fullName" class="col-sm-3 control-label">Full Name <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <?php

                                $element = array(
                                    'type' => 'text',
                                    'name' => 'fullName',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Full Name'
                                );
                                echo form_input($element);
                                echo form_error('fullName');
                                
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="col-sm-3 control-label">Date of Birth <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span> </label>
                                <?php
                                $element = array(
                                    'type' => 'date',
                                    'name' => 'dob',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Enter Data of Birth'
                                );
                                echo form_input($element);
                                echo form_error('dob');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="birthcountry" class="col-sm-3 control-label">Birth Country <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>

                                <?php
                                $element = array(
                                    'type' => 'text',
                                    'name' => 'birthcountry',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Enter Birth Country'
                                );
                                echo form_input($element);
                                echo form_error('birthcountry');
                                ?>

                            </div>
                            <div class="form-group">
                                <label for="birthcity" class="col-sm-3 control-label">Birth City </label>

                                <?php
                                $element = array(
                                    'type' => 'text',
                                    'name' => 'birthcity',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Enter Birth City'
                                );
                                echo form_input($element);
                                echo form_error('birthcity');
                                ?>


                            </div>
                            <div class="form-group">
                                <label for="martial" class="col-sm-3 control-label">Martial Status <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>

                                <?php
                                $style = 'style="width:50%;height:38px;border-radius:1px solid gray;border-radius:2%;margin-right:24%"';
                                $options = array(
                                '' => 'Select Your Martial Status',
                                'Single'         => 'Single',
                                'Married'           => 'Married',
                                    
                            );
                                echo form_dropdown('martial',$options,'',$style);
                                echo form_error('martial');
                                
                                ?>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Gender</label>
                                <?php
                                $style = 'style="width:50%;height:38px;border-radius:1px solid gray;border-radius:2%;margin-right:24%"';
                                $options = array(
                                '' => 'Select Your Gender',
                                'male'         => 'Male',
                                'female'           => 'Female',
                                    
                            );
                                echo form_dropdown('gender',$options,'',$style);
                                echo form_error('gender');
                                
                                ?>

                                <!-- <label class="radio-inline">
                                
                                    <?php
                                    
                                    $element = array(
                                        'type' => 'radio',
                                        'name' => 'gender',
                                        'id' => 'maleRadio',
                                        'style' => 'background-color:white;width:40%;',
                                        'class' => 'form-control',
                                        'value' => 'male'
                                    );
                                    echo form_input($element);

                                    ?>Male
                                </label>
                                <label class="radio-inline">
                                    <?php
                                    $element = array(
                                        'type' => 'radio',
                                        'name' => 'gender',
                                        'id' => 'FemalRadio',
                                        'class' => 'form-control',
                                        'value' => 'female',
                                        'style' => 'background-color:white;border:0px solid gray;width:30%',
                                        'label' => 'Female'
                                    );
                                    echo form_input($element);

                                    ?>Female
                                </label> -->
                                
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <?php
                                $element = array(
                                    'type' => 'email',
                                    'name' => 'email',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Email'
                                );
                                echo form_input($element);
                                echo form_error('email');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-3 control-label">Phone Number <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <?php
                                $element = array(
                                    'type' => 'number',
                                    'name' => 'phone',
                                    'class' => 'form-control',
                                    'oninput' => "javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);",
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Phone Number',
                                    'maxlength' => "11"

                                );
                                echo form_input($element);
                                echo form_error('phone');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-3 control-label">Address</label>
                                <?php
                                $element = array(
                                    'type' => 'text',
                                    'name' => 'address',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Enter Address'
                                );
                                echo form_input($element);
                                echo form_error('address');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="qualification" class="col-sm-3 control-label">Qualification <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <?php
                                $element = array(
                                    'type' => 'text',
                                    'name' => 'qualification',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Qualification'
                                );
                                echo form_input($element);
                                echo form_error('qualification');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="experience" class="col-sm-3 control-label">Total Experience <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <?php
                                $element = array(
                                    'type' => 'text',
                                    'name' => 'experience',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Experience'
                                );
                                echo form_input($element);
                                echo form_error('experience');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="jobapply" class="col-sm-3 control-label">Job Apply For <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>

                                <?php
                                $style = 'style="width:50%;height:38px;border:1px solid gray;border-radius:2%;margin-right:24%"';
                                $options = $from_db_drop;
                                echo form_dropdown('jobapply', $options, '', $style);
                                echo form_error('$options');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="resume" class="col-sm-3 control-label">Resume <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <?php
                                $element = array(
                                    'type' => 'file',
                                    'name' => 'resume',
                                    'class' => 'form-control',
                                    'style' => 'background-color:white;border:1px solid gray;width:50%',
                                    'placeholder' => 'Resume'
                                );
                                echo form_upload($element);
                                echo form_error('resume');
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="terms" class="col-sm-3 control-label">Terms <span class="text-muted small" style="font-weight: bolder;color:red"><?php echo "*"?></span></label>
                                <div class="text-left;">
                                    <h4 style="text-align:justify;width:50%;display:flex;flex-direction:column;"><strong>Applicants agreement ( Important - read carefully before signing). </strong>
                                        <p style="font-size:12px;width:100%;">I certify that all information provided in this application is true and complete. I understand that any false information or omission may disqualify me from further consideration for employment and may result in my dismissal If discovered at a later date. I authorize and agree to cooperate in a thorough investigation of all statements made herein and other matters relating to my background and qualification. I understand that any investigation conducted may include a request for employment, educational and criminal history. I authorize any person, school, current and former employer, consumer reporting agency and any other organization or agency to provide information relevant to such investigation and I hereby release all persons and corporations requesting or supplying information pursuant to such investigation from all liability or responsibility to me for doing so. I understand that I have the right to make a written request within a reasonable period of time for complete disclosure of the nature and scope of any investigation. I further authorize any physician or hospital to release any information which may be necessary to determine my ability to perform the job for which I am being considered or any future job in the event that I am hired. I UNDERSTAND THAT THIS APPLICATION OR SUBSEQUENT EMPLOYMENT DOES NOT CREATE A CONTRACT OF EMPLOYMENT NOR GUARANTEE EMPLOYMENT FOR ANY DEFINITE PERIOD OF TIME.</p>
                                    </h4>
                                    <!-- <input type="checkbox" id="terms" name="terms" value="accepted"> -->
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash() ?>">
                                    <div style="display:flex;width:50%;border:0px solid black">
                                        <?php
                                        $element = array(
                                            'type' => 'checkbox',
                                            'name' => 'terms',
                                            'class' => 'form-control',
                                            'id' => 'terms',
                                            'style' => 'background-color:white;border:1px solid gray;width:100%;margin-left:48%;',
                                            'value' => 'accepted'
                                        );
                                        echo form_checkbox($element);
                                        echo form_error('terms');
                                        ?>
                                        <label style="text-align:left;width:1000%;margin-left:1.6%" for="terms" class="">I agree with terms and conditions.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button style="width:200px;margin-bottom:4%;" type="submit" name="submit" id="submit" class="btn text-left btn-primary">Apply Now</button>
                            </div>
                        </form> <!-- /form -->
                    </div> <!-- ./container -->

                    <script>
                        function showalert(result) {

                            try {
                                $('#success').removeClass('alert-danger');
                                $('#success').removeClass('alert-success');
                            } catch (err) {

                            }
                            $('#success').addClass('alert-' + (result.statusCode == 200 ? 'success' : 'danger'));
                            $('#success').html(result.message);
                            $('#success').show();
                        }
                        $(document).ready(function() {
                            $('#submit').attr('disabled', 'disabled');
                            $('#terms').on('change', function() {
                                if ($(this).prop('checked')) {
                                    $('#submit').removeAttr('disabled');
                                } else {
                                    $('#submit').attr('disabled', 'disabled');
                                }
                            });
                            $('#fupForm').on('submit', function(e) {
                                $('html,body').animate({
                                        scrollTop: $("#toppage").offset().top
                                    },
                                    'slow');
                                e.preventDefault();
                                //$("#submit").attr("disabled", "disabled");
                                var fullName = $('#fullName').val();
                                var dob = $('#dob').val();
                                var birthcountry = $('#birthcountry').val();
                                var birthcity = $('#birthcity').val();
                                var martial = $('#martial').val();
                                var gender = $('#gender').val();
                                var email = $('#email').val();
                                var phone = $('#phone').val();
                                var address = $('#address').val();
                                var qualification = $('#qualification').val();
                                var experience = $('#experience').val();
                                var jobapply = $('#jobapply').val();
                                var resume = $('#resume').val();
                                var terms = $('#terms').prop('checked');
                                if (!terms) {
                                    alert('accept terms and conditions first');
                                    return;
                                }
                                if (fullName != "" && dob != "" && birthcountry != "" && birthcity != "") {
                                    //var data_value = unescape($(this).serialize());
                                    $("#success").hide();
                                    $.ajax({
                                        url: "<?= base_url() ?>career/ajax_career",
                                        type: "POST",
                                        data: new FormData(this),
                                        dataType: 'json',
                                        contentType: false,
                                        cache: false,
                                        processData: false,

                                        success: function(dataResult) {
                                            // var dataResult = JSON.parse(dataResult);
                                            showalert(dataResult);
                                            $("#submit").removeAttr("disabled");
                                            if (dataResult.statusCode === 200) {


                                                $('#fupForm').find('input:text').val('');


                                                //alert(dataResult.message);
                                            }

                                        }
                                    });
                                } else {
                                    alert('Please fill all the field !');
                                }
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
</section>
<!-- <div class="privacy-section cs-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col l12">
                    <nav class="cs-pages-breadcrumb">
                        <div class="nav-wrapper">
                             <a href="<?php echo SITEURL; ?>" class="breadcrumb"><?php echo get_languageword('home'); ?></a>
                            <a href="#" class="breadcrumb"><?php if (isset($pagetitle)) echo $pagetitle; ?></a>
                        </div>
                    </nav>
                </div>
                <div class="col l12">
                    <div class="cs-question">
                       <?php if (isset($record->description)) echo $record->description; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->