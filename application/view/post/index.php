<div class="container">
    <h1> Posts </h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
		<h3><a href="create.php"> Make your own post!</a></h3>
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