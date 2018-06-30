<?php include "../layouts/top/layouttop.php" ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

    <h5>Frontend projects</h5>

</div>

<!-- List group -->
<div class="container">

    <!--First row-->
    <div class="row ">
        <!--First column-->

        <div class="col-lg-6" style="margin-bottom: 2%">

            <!--Card-->
            <div class="card pro" style="border-radius: 0px">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title dark-grey-text"><strong>{{ this.projectname}}</strong></h4>
                    <!--Text-->
                    <p>Concept tested:
                        <span class="badge badge-primary badge-pill"
                              style="background: #007BFF">{{this.concept}}</span>
                    </p>
                    <hr>


                    <a class="pull-left">{{ this.description}}</a>
                    <div class="d-flex justify-content-center ">
                        <a class="btn btn-primary" href="#" role="button">View
                            project</a>
                    </div>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--/.First column-->

    </div>
    <!--/.First row-->


</div>
<?php include "../layouts/bottom/layoutbottom.php" ?>






