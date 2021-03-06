<?php include "../layouts/top/userstop.php" ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="cardno great gr">
                <div class="card-body">

                    <img class="beer" src="../assets/images/1.png">
                    <div class="h4">Validate the programming skills of potential employees</div>

                    <div class="h5">
                        <ul>
                            <li>Explore our project library</li>
                            <li>Custom environment variables</li>
                            <li>Easily monitor ongoing assessments</li>
                            <li>Get comprehensive reports</li>
                            <li>Live demos of candidates work</li>

                        </ul>
                    </div>

                </div>
            </div>


        </div>
        <div class="col-lg-4" style="margin-top: 6%">
            <form action="#" method="post">
                <div class="form-group">
                    <h4>Login</h4>


                    <label>Email</label>
                    <input type="email" id="inputEmail" required autofocus class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" required class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-warning btn-lg">Login</button>
            </form>

            <hr>

            <p>Need an account? <a style="color: #2524FF" href="/signup">Signup</a></p>

        </div>
    </div>


</div>
<?php include "../layouts/bottom/usersbottom.php" ?>