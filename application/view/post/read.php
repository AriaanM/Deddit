<div class="container">
    <h2><?= $value->post_title; ?></h2>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        
        <?php if ($this->post) { ?>
            <div class="post">
            <?= htmlentities($value->post_text); ?>
            </div>
                     
            <?php } else { ?>
                <div>Post not found!</div>
            <?php } ?>
    </div>
</div>