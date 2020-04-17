<?php
// session_start();
// use CodeIgniter\View
?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid">
    <div class="row">

        <?php


        ?>
        <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">View Data Form</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">

                    </div>
                </div>
            </div>
            <div role="main" class="col-md-11 ml-sm-5 pt-3 ">

                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th scope="col">#</th> -->
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Pin Code</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- <th scope="row"><?php echo e($i->id); ?></th> -->
                                <td><?php echo e($i->name); ?></td>
                                <td><?php echo e($i->email); ?></td>
                                <td><?php echo e($i->mobile); ?></td>
                                <td><?php echo e($i->dob); ?></td>
                                <td><?php echo e($i->pincode); ?></td>
                                <td class="text-center">
                                    <a href="" data-toggle="modal" data-target="#exampleModal<?php echo e($i->id); ?>"><span data-feather="code"></span></a>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo e(route('delete', [$i->id])); ?>"><span data-feather="trash-2"></span></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo e($i->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e($i->name); ?> Update id= <?php echo e($i->id); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" method="POST" action="update" novalidate>
                <div class="modal-body">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                    <input type="hidden" class="form-control" value="<?php echo e($i->id); ?>" id="validationCustom01" name="id" placeholder="Name" required>

                        <div class="col">
                            <label for="validationCustom01">Name</label>
                            <input type="text" class="form-control" value="<?php echo e($i->name); ?>" id="validationCustom01" name="name" placeholder="Name" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="validationCustom02">Email Id</label>
                            <input type="email" class="form-control" value="<?php echo e($i->email); ?>" id="validationCustom02" name="email" placeholder="Email ID" required>
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom03">Mobile No.</label>
                            <input type="text" class="form-control" value="<?php echo e($i->mobile); ?>" id="validationCustom03" name="mobile" placeholder="Mobile No." required>
                            
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Date of Birth</label>
                            <input type="date" class="form-control" value="<?php echo e($i->dob); ?>" id="validationCustom04" name="dob" placeholder="Date of Birth" required>
                            
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Pin Code</label>
                            <input type="Pin Code" class="form-control" value="<?php echo e($i->pincode); ?>" id="validationCustom05" name="pincode" placeholder="Pin Code" required>
                            
                        </div>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- </div> -->
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php

// include(APPPATH. 'ViewAPPPATH. sViews/footer.blade.php');

?><?php /**PATH I:\server\htdocs\crud_arshad\resources\views/viewData.blade.php ENDPATH**/ ?>