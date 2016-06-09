<div class="container">
    <h1>Create your own post!</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

    <p>
        <form method="post" action="<?php echo Config::get('URL');?>post/create">
            <label>New post</label><input type="text" name="post_text" />
            <input type="submit" value='Create post' autocomplete="off" />
        </form>
    </p>




    </div>
</div>
