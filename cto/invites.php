<?php include "../layouts/top/layouttop.php" ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

    <h5>Send out invites</h5>


</div>


<div class="row">
    <div class="col-lg-6">
        <div class="d-flex justify-content-center">

            <h4>Upload Email list</h4>
        </div>
    </div>
    <div class="col-lg-6">
        <div>

            <h4>Number of candidates</h4>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-6">
        <div class="text-center">
            <img style="height: 70px;width: 70px" src="../assets/images/outbox.svg">
        </div>
        <div class="form-group ">

            <div style="margin-top: 10%;margin-left: 35%">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <form>
            <div class="form-row">
                <div class="col">

                    <input type="number" name="candidates" required class="form-control"
                           placeholder="Input number of candidates">
                </div>
                <a class="btn btn-success" href="payment.php">Next</a>
            </div>
        </form>
    </div>


</div>

<?php include "../layouts/bottom/layoutbottom.php" ?>


