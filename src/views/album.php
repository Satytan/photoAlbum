<?php
use App\Entity\Photo;

ob_start();
?>
<ul>

<?php /** @var Photo[] $photos */?>

    <?php foreach ($photos as $photo) { ?>
    <li>
        <img src="<?php echo $photo->getPhotoUrl(); ?>" alt="<?php echo $photo->getName(); ?>">
    </li>
<?php } ?>

</ul>
<br>
<a href="/">Все альбомы</a>

<?php

return ob_get_clean();
