<div class="container">
    <h1> P O S T S </h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
	    <p>
            <form method="post" action="<?php echo Config::get('URL');?>post/create">
                <label>Title of post</label><input type="text" name="post_title"/>
                <label>New post</label><input type="text" name="post_text" />
                 <input type="submit" value='Create post' autocomplete="off" />
            </form>
        </p>
            <h3><a href="create.php"> Make your own post!</a></h3>
        <?php if ($this->post) { ?>
                    <?php foreach($this->post as $key => $value) { ?>
                    <a href="<?= Config::get('URL') . 'post/read/' . $value->post_id; ?>"><div class="post">
                        
                            <h2><?= $value->post_title; ?></h2>
                         <?=htmlentities($value->post_text); ?>
                        
                    </div></a>  

                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No posts yet.</div>
            <?php } ?>
    </div>
</div>