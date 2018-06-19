<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><?= empty($user->id) ? 'Add a new user' : 'Edit user ' . $user->name;  ?></h2>
                <?php echo validation_errors(); ?>
            </div>
            <div class="body">
                <?php echo form_open(); ?>
                    <label for="name">Name</label>
                    <div class="form-group">
                        <input type="text" id="userName" name="name" value="<?= empty($user->id) ? '' : $user->name ?>" class="form-control">
                    </div>

                    <label for="email_address">Email Address</label>
                    <div class="form-group">
                        <input type="text" id="email_address" name="email" value="<?= empty($user->id) ? '' : $user->email ?>" class="form-control" placeholder="Enter your email address">
                    </div>
                    <label for="password">Password</label>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <label for="password">Confirm Password</label>
                    <div class="form-group">
                        <input type="password" id="password" name="password_confirm" class="form-control" placeholder="Enter your password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>