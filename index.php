<?php
    include 'inc/header.php';
    include 'lib/User.php';
    $user= new User();



?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>User List <span class="pull-right"><strong>Welcome!</strong>Wasiur</span></h3>
    </div>
            <div class="panel-body">
                <table class="table table-stripped"> 
                    <tr>
                        <th width="20%">Serial</th>
                        <th width="20%">Name</th>
                        <th width="20%">UserName</th>
                        <th width="20%">Email Address</th>
                        <th width="20%">Action</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Wasiur Rahman</td>
                        <td>Wasiur</td>
                        <td>wasiur@gmail.com</td>
                        <td><a class="btn btn-primary" href="profile.php">View</a></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Wasiur Rahman</td>
                        <td>Wasiur</td>
                        <td>wasiur@gmail.com</td>
                        <td><a class="btn btn-primary" href="profile.php">View</a></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Wasiur Rahman</td>
                        <td>Wasiur</td>
                        <td>wasiur@gmail.com</td>
                        <td><a class="btn btn-primary" href="profile.php">View</a></td>
                    </tr>
                </table>
            </div>
</div>
    <?php
      include 'inc/footer.php';
    
    ?>