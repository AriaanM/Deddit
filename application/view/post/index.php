<div class="container">
    <h1> Posts </h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
		<h3><a href="create.php"> Make your own post!</a></h3>
        <?php if ($this->post) { ?>
                    <?php foreach($this->post as $key => $value) { ?>
                    <div class="post">
                        <tr>
                            <td><h2><?= $value->post_title; ?></h2></td>
                            <td>By <?= htmlentities($value->post_user); ?></td>
                        </tr>
                    </div>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No notes yet. Create some !</div>
            <?php } ?>
    </div>
</div>