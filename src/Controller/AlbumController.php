<?php
namespace App\Controller;

use App\Entity\Album;
use App\Entity\Photo;

class AlbumController implements ControllerInterface
{
    public function isApplicable(array $params): bool
    {
        return isset($params['album']);
    }

    public function handle(array $params): string
    {
        $photos = [];
        $basePath = IMAGES_DIR . $params['album'] . '/';
        $files = \glob($basePath . '*.jpg');
        $i = 0;
        foreach ($files as $file) {
            if ($i>2) {
                die($file . ', ' . $params['album']);
            }
            ++$i;
            $photoName = str_replace($basePath, '', $file);
            $photos[] = new Photo($photoName, $params['album']);
        }

        return include VIEWS_DIR . 'album.php';
    }
}
