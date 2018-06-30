<?php include "../layouts/top/userstop.php" ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4" style="margin-top: 6%">
        </div>
        <div class="col-lg-4 " style="margin-top: 6%">

            <h4>Create ide access details</h4>

            <form id="signup" action="#" method="post">


                <div class="form-group">

                    <label>Email</label>
                    <input type="email" id="inputEmail" required autofocus class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" required class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-warning btn-lg">Signup</button>


            </form>

            <hr>


        </div>
        <div class="col-lg-4"></div>

    </div>


</div>
<?php include "../layouts/bottom/usersbottom.php" ?>