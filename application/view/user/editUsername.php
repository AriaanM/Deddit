<div class="container">
    <h1>Username</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>
   <?php
        header("Refresh: 2  ; url=index");
    ?>
    <div class="box">
    Your username has been changed.
    </div>

</div>
