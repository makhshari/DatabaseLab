<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <!-- New Task Form -->
                    <form action="<?php echo e(url('task')); ?>" method="POST" class="form-horizontal">
                        <?php echo e(csrf_field()); ?>


                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="<?php echo e(old('task')); ?>">
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="task-description" class="col-sm-3 control-label">description</label>

                                <div class="col-sm-6">
                                    <textarea type="text" name="description" id="task-description" class="form-control" value="<?php echo e(old('task')); ?>"></textarea>
                                </div>
                            </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            <?php if(count($tasks) > 0): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                <?php foreach($tasks as $task): ?>
                                    <tr>
                                        <td class="table-text "><strong><?php echo e($task->name); ?></strong></td>
                                        <?php if($task->description!=""): ?>
                                        <td class="table-text"><div><?php echo e($task->description); ?></div>
                                            <button class="btn btn-primary btn-xs btn-update btn-add-card" id="updatebtn">Update</button>
                                            <form action="<?php echo e(url('nulldesc/' . $task->id)); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>


                                                <button type="submit" id="delete-description-<?php echo e($task->id); ?>" class="btn btn-danger btn-xs btn-update btn-add-card">Delete description</button>
                                            </form>

                                        </td>
                                        <?php else: ?>
                                            <td>&nbsp;</td>
                                    <?php endif; ?>
                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="<?php echo e(url('task/' . $task->id)); ?>" method="POST">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>


                                                <button type="submit" id="delete-task-<?php echo e($task->id); ?>" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>