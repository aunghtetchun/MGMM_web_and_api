<?php $__env->startSection("title"); ?> Popular Game List <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent("component.breadcrumb",["data"=>[

]]); ?>
<?php $__env->slot("last"); ?> Popular Game List <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-12" >
        <?php $__env->startComponent("component.card"); ?>
        <?php $__env->slot('icon'); ?> <i class="feather-file text-primary"></i> <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Popular Game List <?php $__env->endSlot(); ?>
        <?php $__env->slot('button'); ?>

        <?php $__env->endSlot(); ?>
        <?php $__env->slot('body'); ?>
        <div style="overflow:scroll">
                <table class="table table-bordered table-hover mb-0" style="overflow:scroll">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Logo</th>
                        <th scope="col">ဂိမ်းနာမည်</th>
                        <th scope="col">Category</th>
                        <th scope="col">Viewer</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Controls</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = \App\Post::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($p->id); ?></th>
                            <td>
                                <img src="<?php echo e(asset("/storage/logo/".$p->logo)); ?>" alt="" style="width: 40px;">
                            </td>
                            <td><?php echo e($p->name); ?></td>
                            <td><?php echo e($p->getCategory->title); ?></td>
                            
                            <td> 
                                <?php echo e($p->getViewer!='' ? $p->getViewer->count : 0); ?>

                                <form action="<?php echo e(route('post.viewerDel',$p->id)); ?>" class="d-inline-block text-center w-75"  method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <button onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-outline-danger text-left">
                                        <i class="feather-trash-2"></i>
                                    </button>
                                </form>
                            </td>
                            <td> <?php echo e(count($p->getComment)); ?>

                                <a href="<?php echo e(route('post.showComment',$p->id)); ?>" class="btn ml-2 btn-outline-success btn-sm">
                                    <i class="feather-eye"></i>
                                </a>
                            </td>
                            <td> <?php echo e(count($p->getRating)); ?>

                                <a href="<?php echo e(route('post.showRating',$p->id)); ?>" class="btn ml-2 btn-outline-success btn-sm">
                                    <i class="feather-eye"></i>
                                </a>
                            </td>
                            
                            <td class="control-group d-flex" style="vertical-align: middle; text-align: center">
                                <a href="<?php echo e(route('post.edit',$p->id)); ?>" class="btn mr-2 btn-outline-warning btn-sm">
                                    <i class="feather-edit"></i>
                                </a>







                                <a href="<?php echo e(route('post.show',$p->id)); ?>" class="btn ml-2 btn-outline-success btn-sm">
                                    <i class="feather-eye"></i>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>


        </div>
        <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("foot"); ?>
<script>
    $(".table").dataTable({
        "order": [[0, "desc" ]]
    });
    $(".dataTables_length,.dataTables_filter,.dataTable,.dataTables_paginate,.dataTables_info").parent().addClass("px-0");
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/modgamesmm/resources/views/viewer/viewer.blade.php ENDPATH**/ ?>