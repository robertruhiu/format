<?php include "../layouts/top/userstop.php" ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="cardno great gr">
                <div class="card-body">
                    <img class="beer" src="../assets/images/laid.png">
                    <div class="h4">My profile</div>


                    <hr>
                    <ul class="h5 ">

                    </ul>
                </div>
            </div>


        </div>
        <div class="col-lg-4 " style="margin-top: 6%">

            <h4>Tell us more about yourself</h4>

            <form action="#" method="post">


                <div class="form-group">

                    <label>User name</label>
                    <input type="text" class="form-control" required name="username">
                </div>
                <div class="form-group">
                    <label>Organization</label>
                    <input type="text" class="form-control" required name="company">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" required name="position">
                </div>


                <button type="submit" class="btn btn-warning btn-lg">Update profile</button>


            </form>


        </div>

    </div>


</div>
<?php include "../layouts/bottom/usersbottom.php" ?>