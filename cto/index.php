<?php include "../layouts/top/layouttop.php" ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

    <h5>Which skill are you looking for?</h5>


</div>
    <div class="row">
    <div class="col-lg-3 ">
        <a href="../projects/frontend.php">
            <div class="card card1 leo" style="background-color:#00BAD7">
                <div class="card-body">
                    <h5 class="card-title cardtitle1" style="color: white"> Frontend</h5>

                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 ">
        <a href="../projects/backend.php">
            <div class="card card1 leo" style="background-color:#40CB88 ">
                <div class="card-body">
                    <h5 class="card-title cardtitle1" style="color: white"> Backend</h5>

                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 ">
        <a href="../projects/fullstack.php">
            <div class="card card1 leo" style="background-color:#B080D6 ">
                <div class="card-body">
                    <h5 class="card-title cardtitle1" style="color: white"> Full stack</h5>

                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 ">
        <a href="../projects/devops.php">
            <div class="card card1 leo" style="background-color:#7BD749 ">
                <div class="card-body">
                    <h5 class="card-title cardtitle1" style="color: white"> Devops</h5>

                </div>
            </div>
        </a>
    </div>


</div>
    <hr>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h5>Projects ongoing </h5><br>

</div>
<!--projects here-->

    <div class="row">



    <div class="col-lg-3">
        <a href="project.php">
            <div class="card ml ">
                <div class="card-body">
                    <h5 class="card-title">{{this.item.projectname}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Project type: {{this.item.type}}</h6>
                    <p class="card-text">Candidates: 20</p>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
</div>

<?php include "../layouts/bottom/layoutbottom.php" ?>




