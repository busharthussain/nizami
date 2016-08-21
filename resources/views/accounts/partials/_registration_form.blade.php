<form class="form-horizontal" role="form">

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>
        <div class="col-sm-9">
            {!! Form::text('name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Student name', 'id' => 'name', 'size' => 10,'required' => 'required']) !!}
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="userName"> User name </label>
        <div class="col-sm-9">
            {!! Form::text('user_name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'User name', 'id' => 'user_name', 'size' => 10,'required' => 'required']) !!}
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="Email"> Email </label>
        <div class="col-sm-9">
            {!! Form::text('email', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Email', 'id' => 'email', 'size' => 10,'required' => 'required']) !!}
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="Password"> Password </label>
        <div class="col-sm-9">
            {!! Form::password('password', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Password', 'id' => 'password', 'size' => 10,'required' => 'required']) !!}
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ReTypePassword"> Re-type password </label>
        <div class="col-sm-9">
            {!! Form::password('password_confirmation', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Re-type password', 'id' => 'password_confirmation', 'size' => 10,'required' => 'required']) !!}
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="fatherName"> S/O </label>
        <div class="col-sm-9">
            {!! Form::text('father_name', null, ['class' => 'col-xs-10 col-sm-5', 'placeholder' => 'Father name', 'id' => 'father_name', 'size' => 10,'required' => 'required']) !!}
            <input type="text" id="father_name" name="father_name" placeholder="Father name" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="type"> Type </label>
        <div class="col-sm-9">
            <select class="chosen-select form-control col-xs-10 col-sm-5" id="type" name="type" data-placeholder="Choose a Type..." bash>
                <option value="">  </option>
                <option value="hafiz">Hafiz</option>
                <option value="aalim">Aalim</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="InstitutionType"> Institution type </label>
        <div class="col-sm-9">
            <select class="chosen-select form-control col-xs-10 col-sm-5" id="institute_type" name="institute_type" data-placeholder="Choose a Type..." bash>
                <option value="">  </option>
                <option value="hafiz">Hafiz</option>
                <option value="aalim">Aalim</option>
            </select>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="Admission date"> Admission date </label>
        <div class="col-sm-9">
            <div class="input-group">
                {!! Form::text('admission_date', null, ['class' => 'form-control date-picker col-xs-10 col-sm-5', 'placeholder' => 'Admission date', 'id' => 'admission_date', 'size' => 10,'required' => 'required']) !!}
                <input class="form-control date-picker col-xs-10 col-sm-5" id="admission_date" name="admission_date" placeholder="Admission date" type="text" data-date-format="dd-mm-yyyy" readonly = true />
<!--					<span class="input-group-addon">-->
<!--						<i class="fa fa-calendar bigger-110"></i>-->
<!--					</span>-->
            </div>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="AdmissionNo"> Admission no# </label>
        <div class="col-sm-9">
            <input type="text" id="admission_number" name="admission_number" placeholder="Admission number" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="Date of birth"> Date of birth </label>
        <div class="col-sm-9">
            <div class="input-group">
                <input class="form-control date-picker col-xs-10 col-sm-5" id="dob" name="dob" placeholder="Date of birth" type="text" data-date-format="dd-mm-yyyy" readonly = true />
            </div>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="City"> City </label>
        <div class="col-sm-9">
            <input type="text" id="city" name="city" placeholder="City" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="District"> District </label>
        <div class="col-sm-9">
            <input type="text" id="district" name="district" placeholder="District" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="BloodGroup"> Blood group </label>
        <div class="col-sm-9">
            <input type="text" id="blood_group" name="blood_group" placeholder="Blood group" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="NationalIDCardNumber"> National ID card number </label>
        <div class="col-sm-9">
            <input type="text" id="user_id_card_number" name="user_id_card_number" placeholder="National ID card number" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="GuardianNationalIdCardno"> Guardian National Id card no# </label>
        <div class="col-sm-9">
            <input type="text" id="guardian_id_card_number" name="guardian_id_card_number" placeholder="Guardian National Id card number" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="LandLineNumber"> Land line number </label>
        <div class="col-sm-9">
            <input type="text" id="landlord_number" name="landlord_number" placeholder="Land line number" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="MobileNumber"> Mobile number </label>
        <div class="col-sm-9">
            <input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile number" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="GuardianMobileNumber"> Guardian mobile number </label>
        <div class="col-sm-9">
            <input type="text" id="guardian_mobile_number" name = "guardian_mobile_number" placeholder="Guardian mobile number" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="AcademicBackground"> Academic background </label>
        <div class="col-sm-9">
            <input type="text" id="academic_background" name = "academic_background" placeholder="Academic background" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="academicBackground"> Academic background institute </label>
        <div class="col-sm-9">
            <input type="text" id="academic_background_institute_name" name="academic_background_institute_name" placeholder="Academic background institute" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="PermanentAddress"> Permanent Address </label>
        <div class="col-sm-9">
            <input type="text" id="permanent_address" name="permanent_address" placeholder="Permanent Address" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="CurrentAddress"> Current Address </label>
        <div class="col-sm-9">
            <input type="text" id="current_address" name="current_address" placeholder="Current Address" class="col-xs-10 col-sm-5" bash />
        </div>
    </div>

    <div class="space-4"></div>

    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
                <input type="hidden" id="token" value="{{ csrf_token() }}">
                {!! Form::submit($submitButtonText, array('class' => 'btn btn-info', 'id' => 'saveForm')) !!}

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .chosen-container {
            width: 348px !important;
        }
    </style>
    <!-- PAGE CONTENT ENDS -->