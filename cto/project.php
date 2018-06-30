<?php include "../layouts/top/layouttop.php" ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3>Applicants by stage</h3>

</div>
<div class="row">
    <div class="col-sm-3">

        <div class="card ">
            <div class="card-body">
                <h5 class="card-title">Applicants</h5>
                <p class="card-text">20</p>

            </div>
        </div>

    </div>
    <div class="col-sm-3">

        <div class="card projectcard ">
            <div class="card-body">
                <h5 class="card-title">interview scheduled</h5>
                <p class="card-text">5</p>


            </div>
        </div>

    </div>
    <div class="col-sm-3">

        <div class="card  ">
            <div class="card-body">
                <h5 class="card-title">feedback recieved</h5>
                <p class="card-text">3</p>

            </div>
        </div>

    </div>
    <div class="col-sm-3">

        <div class="card ">
            <div class="card-body">
                <h5 class="card-title">feedback pending</h5>
                <p class="card-text">2</p>
            </div>
        </div>

    </div>
</div>
<br>

<table class="table" style="width: 100%">
    <thead>
    <tr>
        <th scope="col">Rank</th>
        <th scope="col">Name</th>
        <th scope="col">Score</th>
        <th scope="col">profficency</th>
        <th scope="col">Demo</th>
        <th scope="col">Full report</th>
        <th scope="col">Invite for interview</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>60%</td>
        <td>moderate</td>
        <td>
            <a href="https://todo-react-redux.firebaseapp.com/sign-in">
                <button type="button" class="btn btn-primary">live demo</button>
            </a>
        </td>
        <td>
            <a href="fullreport.php">
                <button type="button" class="btn btn-info">Full report</button>
            </a>
        </td>
        <td>

            <button type="button" class="btn btn-success">Invite</button>

        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>50%</td>
        <td>moderate</td>
        <td>
            <a href="https://todo-react-redux.firebaseapp.com/sign-in">
                <button type="button" class="btn btn-primary">live demo</button>
            </a>
        </td>
        <td>
            <a href="fullreport.php">
                <button type="button" class="btn btn-info">Full report</button>
            </a>
        </td>
        <td>
            <button type="button" class="btn btn-success">Invite</button>
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>30%</td>
        <td>low</td>
        <td>
            <a href="https://todo-react-redux.firebaseapp.com/sign-in">
                <button type="button" class="btn btn-primary">live demo</button>
            </a>
        </td>
        <td>
            <a href="fullreport.php">
                <button type="button" class="btn btn-info">Full report</button>
            </a>
        </td>
        <td>
            <button type="button" class="btn btn-success">Invite</button>
        </td>
    </tr>
    </tbody>
</table>


<?php include "../layouts/bottom/layoutbottom.php" ?>







