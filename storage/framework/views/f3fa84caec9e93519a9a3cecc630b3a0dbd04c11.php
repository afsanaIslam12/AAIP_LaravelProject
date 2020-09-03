<?php $__env->startSection('content'); ?>

<!--    start slide image-->
<div class="">
    <div id="myslideshow" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myslideshow" data-slide-to="0" class="active">
            <li data-target="#myslideshow" data-slide-to="1">
            <li data-target="#myslideshow" data-slide-to="2">
            <li data-target="#myslideshow" data-slide-to="3">

            </li>
        </ol>
        <div class="carousel-inner" style="min-height:fit-content;">
            <div class="carousel-item active">
                <img src="image/slide11.png" class="d-block w-100" style="height: 610px;">
                <div class="carousel-caption d-none d-md-block">
                    

                    

                </div>
            </div>
            <div class="carousel-item">
                <img src="image/s1.jpg" class="d-block w-100" style="height: 610px;">
                <div class="carousel-caption d-none d-md-block">
                    

                    
                </div>
            </div>

            <div class="carousel-item">
                <img src="image/slide12.png" class="d-block w-100" style="height: 610px;">
                <div class="carousel-caption d-none d-md-block">
                    

                    
                </div>
            </div>
        </div>
        <a href="#myslideshow" class="carousel-control-prev" role="button"          data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#myslideshow" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--    End slide image-->


<div class="container">

<div class="block">
  <div class="row">
    <div class="span4">
      <img style="margin-top: 40px;" class="img-left" src="img/Picture2.png">
      <div style="margin-top: 70px;" class="content-heading"><h3>Get Hired</h3></div>
      <p>Discover jobs recommended for you
        Find opportunities that match your specific interests, abilities, and preferred locations. Apply to verified jobs. No need to worry, Alumni  Association  Integrated  Platform (AAIP) with trusted Alumni to get all our job posts for you. Alumni members and students can keep good communication between each other through AAIP and recommend jobs for you.
        </p>

      <div class="middle">
        <a style="text-decoration: none; color: rgb(24, 13, 13); height: 50px; font-weight: 700;" href="<?php echo e(url('/')); ?>/job-offer" class="btnn btn1">CLICK TO APPLY</a>
      </div>


    </div>
 </div>
</div>

</div>


<!-- Start Feature Section -->
<div id="Resources" class="offset">
<div class="fixed-background">
<div class="row dark  text-center">

<div class="col-12">
<h3 class="heading">Find The Opportunity</h3>
<div class="heading-underline"></div>
</div>

<div class="col-md-4">
<h3>Still Student?</h3>
<div class="feature">
  <!-- <i class="fas fa-code fa-3x"></i> -->
  <img style="width: 260px; height: 300px; border-radius: 50%;" src="img/stdnt.jpg">
</div>
<p class="lead">Join Alumni Association Integrated Platform and be a member of a  family of more than 1k+  job holder Alumni.</p>

<a href="<?php echo e(url('/')); ?>/for-fresher" style="font-weight: 500">Learn More</a>
</div>

<div class="col-md-4">
<h3>Are You Fresher?</h3>
<div class="feature">
  <!-- <i class="fas fa-bold fa-3x"></i> -->
  <img style="width: 260px; height: 300px; border-radius: 50%;" src="img/fresher2.JPG">
</div>
<p class="lead">Get relevant training and develop yourself as a keen professional to stand out in this competitive job market. Never miss a single opportunity.</p>

<a href="<?php echo e(url('/')); ?>/for-fresher" style="font-weight: 500">Learn More</a>
</div>


<div class="col-md-4">
<h3>Have Experience?</h3>
<div class="feature">
  <!-- <i class="fab fa-css3 fa-3x"></i> -->
  <img style="width: 260px; height: 300px; border-radius: 50%;" src="img/exp3.JPG">
</div>
<p class="lead">Be our mentors and share your experience.Help to motivate the students and freshers to choose their career path.</p>

<a href="<?php echo e(url('/')); ?>/for-experience" style="font-weight: 500">Learn More</a>
</div>

</div>   <!-- End Row Dark -->
<div class="fixed-wrap">
<div class="fixed">

</div>
</div>
</div>  <!-- End Fixed Background -->
</div>
<!-- End Feature Section -->


<!-- Start Client Section -->
<div id="clients" class="offset">
<div class="jumbotron">
<div class="col-12 text-center">
  <h3 class="heading">User Opinion</h3>
  <div class="heading-underline"></div>
</div>

<div class="row">
  <div class="col-md-6 clients">
  <div class="row">
    <div class="col-md-4"> <!---For Image-->
      <img src="image/user_labib.JPG">
    </div>
    <div class="col-md-8"> <!---For Text-->
      <blockquote>
        <i class="fas fa-quote-left"></i>
        I think AAIP is the real platform to build a bridge between Alumni and it’s students. By using this platform both University and it’s students can be benefited to enrich their knowledge.  Not only that, it can play a significant role to build up a knowledge based society.
        <hr class="clients-hr">
        <cite>&#8212; Labib Tajremin, Business owner</cite>
      </blockquote>
    </div>
  </div>
  </div>


  <div class="col-md-6 clients">
    <div class="row">
      <div class="col-md-4"> <!---For Image-->
        <img src="image/user_joy1.JPG">
      </div>
      <div class="col-md-8"> <!---For Text-->
        <blockquote>
          <i class="fas fa-quote-left"></i>
          I graduated last fall semester from UIU. After my graduation I was so much confused about my career but AAIP helped me very much that now I know what to do next with my career and removed all my confusions.
          <hr class="clients-hr">
          <cite>&#8212; Farzat Shahriar, student</cite>
        </blockquote>
      </div>
    </div>
    </div>

</div>  <!-- End row -->
</div>  <!-- End Jumbotron -->
</div>
<!-- End Client Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\capstone\resources\views/home.blade.php ENDPATH**/ ?>