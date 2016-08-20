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
                        List
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12" id="list-users">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<script>
        $(document).ready(function(){

            $.ajax({
                type: 'GET',
                url: 'get-users-list',
                success: function (data) {
                    if(data){
                        $('#list-users').html(data);
                    }
                },
                error: function (data) {

                }
            });

        });
</script>
{!! Html::script('js/jquery.dataTables.min.js') !!}
{!! Html::script('js/jquery.dataTables.bootstrap.min.js') !!}
{!! Html::script('js/dataTables.select.min.js') !!}

<script type="text/javascript">

</script>
@endsection