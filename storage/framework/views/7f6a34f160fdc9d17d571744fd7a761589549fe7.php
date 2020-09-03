<?php $__env->startSection('content'); ?>

<div class="container">
    <form action="#" name="myform" class="form-group">
        <h2 style="text-align: center; font-weight:bold; margin-top: 20px; margin-bottom: 20px">Student Registration Form</h2>
        <div class="row jumbotron">
            <div class="col-md-6">
                <label for="inputname">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name">
            </div>

            <div class="col-md-6">
                <label for="inputemail">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email Address">
            </div>

            <div class="col-md-6">
                <label for="inputdept">Department</label>
                <input type="text" class="form-control" placeholder="Example: CSE">
            </div>

            <div class="col-md-6">
                <label for="inputstdid">Student ID</label>
                <input type="text" class="form-control" placeholder="Example: 011162010">
            </div>

            <div class="col-md-6">
                <label for="inputbatch">Batch</label>
                <input type="text" class="form-control" placeholder="Example: 162">
            </div>

            <div class="col-md-6">
                <label for="inputblood">Blood Group</label>
                <input type="text" class="form-control" placeholder="Example: AB+">
            </div>

            <div class="col-md-6">
                <label for="inputphone">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone NUmber">
            </div>

            <div class="col-md-6">
                <label for="inputaddress">Address</label>
                <input type="text" class="form-control" placeholder="Enter Your Address">
            </div>




            <div class="col-md-6">
                <label for="inputpassword">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password">
            </div>

            <div class="col-md-12" style="text-align: center; margin-top:20px">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>

</div>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\capstone\resources\views/stdregister.blade.php ENDPATH**/ ?>