<?php
use App\Entity\Album;

ob_start();
?>
<ul>
<?php /** @var Album[] $albums */ ?>
<?php foreach ($albums as $album) { ?>
    <li>
        <a href="<?php echo $album->getAlbumUrl(); ?>">
            <img src="<?php echo $album->getPreviewUrl(); ?>" alt="<?php echo $album->getName(); ?>">
        </a>
    </li>
<?php } ?>

</ul>

<?php

return ob_get_clean();
