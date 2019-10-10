<?php
namespace App\Controller;

use App\Entity\Album;
use function glob;

class AlbumListController implements ControllerInterface
{
    /**
     * @param array $params
     *
     * @return bool
     */
    public function isApplicable(array $params): bool
    {
        return !isset($params['album']);
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function handle(array $params): string
    {
        $albums = [];
        $folders = glob(IMAGES_DIR . '*');

        foreach ($folders as $folder) {
            $folderName = str_replace(IMAGES_DIR, '', $folder);
            $albums[] = new Album($folderName);
        }

        return include VIEWS_DIR . 'album-list.php';
    }
}
