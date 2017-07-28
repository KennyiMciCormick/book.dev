<div class="container">
    <?= $post ?>
    <?= $meta['title'] ?>

    <ul>
        <?php if (!empty($posts)) { ?>
            <?php foreach ($posts as $post) { ?>
                <li><?= $post['title'] ?></li>
            <?php }
        } ?>

    </ul>
</div>
