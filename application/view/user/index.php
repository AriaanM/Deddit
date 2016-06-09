<div class="container">
    <h1>UserController/showProfile</h1>

    <div class="box">
        <h1>Your profile</h1>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
    <br>

        <!-- Username -->
        <h2>Change your username</h2>
        <div>Your username: <?= $this->user_name; ?></div>
    <br>    <form action="<?php echo Config::get('URL'); ?>user/editUserName_action" method="post">
            <input type="text" name="user_name" required placeholder="New username" />
            <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
            <input type="submit" value="Submit" />
        </form>
    <br>
    <br>
        <!-- Password -->
        <h2>Change your password</h2>
        <p>min. 6 characters</p>
        <form method="post" action="<?php echo Config::get('URL'); ?>user/changePassword_action" name="new_password_form">
            <p><input id="change_input_password_current" class="reset_input" type='password' name='user_password_current' pattern=".{6,}" required autocomplete="off" placeholder="Current Password"  /></p>
            <p><input id="change_input_password_new" class="reset_input" type="password"
                   name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="New password" /></p>
            <p><input id="change_input_password_repeat" class="reset_input" type="password"
                   name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="Repeat new password" /></p>
                <input type="submit"  name="submit_new_password" value="Submit new password" />
        </form>
    <br>
    <br>
        <!-- email addres -->
        <h2>Change your email addres</h2>
        <div>Your email: <?= $this->user_email; ?></div>
        <form action="<?php echo Config::get('URL'); ?>user/editUserEmail_action" method="post"> 
    <br>
            <input type="text" name="user_email" required placeholder="New email address" />
            <input type="submit" value="Submit" />
        </form>        
    <br>
    <br>
        <!-- avatar -->
        <h2>Change your avatar</h2>
        <div>Your avatar image:
            <?php if (Config::get('USE_GRAVATAR')) { ?>
                Your gravatar pic (on gravatar.com): <img src='<?= $this->user_gravatar_image_url; ?>' />
            <?php } else { ?>
                Your avatar pic (saved locally): <img src='<?= $this->user_avatar_file; ?>' />
            <?php } ?>
        <form action="<?php echo Config::get('URL'); ?>user/uploadAvatar_action" method="post" enctype="multipart/form-data">
            <label for="avatar_file">Select an avatar image from your hard-disk, max size 5 MB</p></label>
    <br>
    <br>        
            <input type="file" name="avatar_file" required />
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
            <input type="submit" value="Upload image" />
            
            <h3>Delete your avatar</h3>
            <p>Click this link to delete your (local) avatar: <a href="<?php echo Config::get('URL'); ?>user/deleteAvatar_action">Delete your avatar</a>
        </form>
        </div>
    <br>
    <br>
        <!-- acount type -->
<?php   if (Session::get("user_account_type") == 7) : ?>
        <li <?php if (View::checkForActiveController($filename, "admin")) { echo ' class="active" ';} ?> >
        
        <h2>Change the acount type</h2>
        
        <div>Your account type is: <?= $this->user_account_type; ?></div>
        <form action="<?php echo Config::get('URL'); ?>user/changeUserRole_action" method="post">
            <?php if (Session::get('user_account_type') == 1) { ?>
                <input type="submit" name="user_account_upgrade" value="Upgrade this account (to Premium User)" />
            <?php } else if (Session::get('user_account_type') == 2) { ?>
                <input type="submit" name="user_account_downgrade" value="Downgrade this account (to Basic User)" />
            <?php } ?>
<?php   endif; ?>
        </form>
    </div>
</div>
