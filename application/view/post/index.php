<div class="container">
    <h1> Posts </h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <p>
            <form method="post" action="<?php echo Config::get('URL');?>post/create">
                <label>Text of new post: </label><input type="text" name="post_text" />
                <input type="submit" value='Create this post' autocomplete="off" />
            </form>
        </p>

		<h3><a href="<?php echo Config::get('URL');?>post/create"> Make your own post!</a></h3>
        <?php if ($this->post) { ?>
                    <?php foreach($this->post as $key => $value) { ?>
                        <tr>
                            <td><?= $value->post_author; ?></td>
                            <td><?= htmlentities($value->post_text); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No notes yet. Create some !</div>
            <?php } ?>
    </div>
</div>