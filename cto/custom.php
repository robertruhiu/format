<?php include "../layouts/top/layouttop.php" ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

    <h5>Tech stack customisation</h5>

</div>



<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">

            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <h5 class="cardtitle">Choose tech stack </h5>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState">Language</label>
                <select id="inputState" class="form-control" name="language">
                    <option selected>Choose...</option>
                    <option>Python</option>
                    <option>Javascript</option>
                    <option>Java</option>
                    <option>Php</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState"> Client side framework</label>
                <select id="inputState" class="form-control" name="framework">
                    <option selected>Choose...</option>
                    <option>Angular</option>
                    <option>React</option>
                    <option>Vue</option>
                    <option>Meteor</option>

                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState">Server side Framework</label>
                <select id="inputState" class="form-control" name="framework">
                    <option selected>Choose...</option>
                    <option>Django</option>
                    <option>Express js</option>
                    <option>Ruby on Rails</option>
                    <option>Flask</option>
                    <option>Laravel</option>

                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState">Database</label>
                <select id="inputState" class="form-control">
                    <option name="database" selected>Choose...</option>
                    <option>Postgress</option>
                    <option>Mongo</option>
                    <option>Firebase</option>
                    <option>mariadb</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState">Version control system</label>
                <select id="inputState" class="form-control" name="vcs">
                    <option selected>Choose...</option>
                    <option>Github</option>
                    <option>Gitlab</option>
                    <option>Bitbucket</option>
                    <option>kiln</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState">Time (hr)</label>
                <select id="inputState" class="form-control" name="time">
                    <option selected>Choose...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>

                </select>
            </div>
        </div>
    </div>
</div>
<div class="row" style="margin-top: -5%">
    <div class="col-lg-12">
        <div class="d-flex justify-content-end">

            <a class="btn btn-success" style="margin-left: 5%" href="require.php" role="button">Next</a>
        </div>
    </div>

</div>
<?php include "../layouts/bottom/layoutbottom.php" ?>













