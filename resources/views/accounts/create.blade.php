@extends('layout')

@section('content')
<div class="main-content">
<div class="main-content-inner">
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
        </li>

        <li>
            <a href="#">Students</a>
        </li>
        <li class="active">Subjects</li>
    </ul><!-- /.breadcrumb -->
</div>

<div class="page-content">

<div class="page-header">
    <h1>
        Students
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Add new
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
<div class="col-xs-12">

<!-- PAGE CONTENT BEGINS -->
    {!! Form::model($data, ['class' => 'form-horizontal' , 'id' => 'form' , 'action' => ['Accounts\AccountController@saveUser']]) !!}
        @include('accounts.partials._registration_form', ['submitButtonText' => 'add'])
    {!! Form::token() !!}
    {!! Form::close() !!}
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<script>
//    $(document).ready(function(){
//        $('.fancybox').fancybox();
//    });
    $(document)
    $("#form").submit( function (event) {
        event.preventDefault();

        var arrData = {};
        var formData = $("#form").serializeArray();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var token = '_token';
        $.each(formData, function(index) {
            if(index == 0){
                arrData[token] = [arrData[token]];
                arrData[token].push(CSRF_TOKEN);
            }
            if (arrData[this.name] !== undefined) {
                if (!arrData[this.name].push) {
                    arrData[this.name] = [arrData[this.name]];
                }
                arrData[this.name].push(this.value || '');
            } else {
                arrData[this.name] = this.value || '';
            }
        });
        $.ajax({
            type: 'POST',
            url: 'save',
            data: formData,
            success: function (data) {
                if(data){
                    showMsgDelay('User is added successfully');
                }
            },
            error: function (data) {
                var errors = data.responseJSON;
                console.log(errors);
                errorsHtml = '<div style="max-width:700px;"><h1>Please review following errors</h1><ul class="errorMsg">';
                $.each( errors, function( key, value ) {
                    console.log(value);
                    errorsHtml += '<li>' + value + '</li>'; //showing only the first error.
                });
                errorsHtml += '</ul></div>';
                $.fancybox(errorsHtml, {
                    // fancybox API options
                    fitToView: true,
                    width: 700,
                    height: 300,
                    autoSize: false,
                    closeClick: true,
                    openEffect: 'none',
                    closeEffect: false
                }); // fancybox
            }
        });

    });
</script>
@endsection