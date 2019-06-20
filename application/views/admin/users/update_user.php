<?php
foreach($user_id as $user){
?>
<div class="row">
    <div class="col-md-6">
        <form method="POST" action="" enctype="multipart/form-data">
       <div class="form-group">
        <label class="" for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control" value="<?php echo $user['first_name']; ?>" id="first_name"/>
    </div>
    <div class="form-group">
        <label class="" for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>" id="last_name"/>
    </div>
    <div class="form-group">
        <label class="" for="username">Username</label>
        <input type="text" name="user_name" class="form-control" value="<?php echo $user['username']; ?>" id="username"/>
    </div>
    <div class="form-group">
        <label class="" for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $user['email']; ?>" id="email"/>
    </div>
    <div class="form-group">
        <label class="" for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password"/>
    </div>
    <div class="form-group">
        <label class="" for="retype_password">Retype Password</label>
        <input type="password" class="form-control" id="retype_password"/>
    </div>
    <div class="form-group">
        <label class="" for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo"/>
    </div>
    <div class="form-group">
        <input type="Submit" value="Update User" class="form-control btn btn-info btn-icon-split" id="photo" name="photo"/>
    </div>
    </form>
    </div>
</div>
<?php
}
?>