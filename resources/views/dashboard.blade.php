
<!DOCTYPE html>
<html>

<head>
    @include('sections.header')
</head>
<body>


<div class="container" id="tourpackages-carousel">
    @include('common.errors')
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add Task
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (count($tasks) > 0)
    <div class="row todo">
        <div class="col-lg-12"><h1>To Do</h1></div>
        @foreach ($tasks as $task)
        <div class="taskcard col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <form action="/task" method="POST" class="form-horizontal">
                        <div class='col-lg-12'>
                            <span class="glyphicon glyphicon-credit-card"></span>
                            <span class="glyphicon glyphicon-trash pull-right text-primary"></span>
                        </div>
                        <div class='col-lg-12 well well-add-card'>
                            <h4>{{$task->name}}</h4>
                        </div>
                        <div class='col-lg-12'>
                            <p>4111xxxxx xxx3265</p>
                            <p >Exp: 12-08</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card" id="updatebtn">Update</button>
                        <button type="button" class="btn btn-success btn-xs btn-update btn-add-card" id="verifybtn">Vrify Now</button>
                        <form action="/task/{{ $task->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card" id="deletebtn">Delete Task</button>
                        </form>

                        <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- End row -->
    @endif


    <div class="doing row">
        <div class="col-lg-12"><h1>Doing</h1></div>

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
                    <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card" id="updatebtn">Update</button>
                    <button type="button" class="btn btn-success btn-xs btn-update btn-add-card" id="verifybtn">Vrify Now</button>
                    <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card" id="deletebtn">Delete Task</button>
                    <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
                </div>
            </div>
        </div>


    </div><!-- End row -->
    <div class="done row">
        <div class="col-lg-12"><h1>Done</h1></div>

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
                    <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card" id="updatebtn">Update</button>
                    <button type="button" class="btn btn-success btn-xs btn-update btn-add-card" id="verifybtn">Vrify Now</button>
                    <button type="button" class="btn btn-danger btn-xs btn-update btn-add-card" id="deletebtn">Delete Task</button>
                    <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
                </div>
            </div>
        </div>

    </div><!-- End row -->
</div><!-- End container -->
</body>
</html>


