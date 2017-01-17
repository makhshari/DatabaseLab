@extends('dashboard')

@section('taskcard')

        <div class="taskcard col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <div class='col-lg-12'>
                        <span class="glyphicon glyphicon-credit-card"></span>
                        <span class="glyphicon glyphicon-trash pull-right text-primary"></span>
                    </div>
                    <div class='col-lg-12 well well-add-card'>
                        <h4>John Deo Mobilel</h4>
                    </div>
                    <div class='col-lg-12'>
                        <p>4111xxxxxxxx3265</p>
                        <p >Exp: 12-08</p>
                    </div>
                    <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card">Update</button>
                    <button type="button" class="btn btn-success btn-xs btn-update btn-add-card">Vrify Now</button>
                    <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card">Delete Task</button>
                    <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
                </div>
            </div>
        </div>
@stop