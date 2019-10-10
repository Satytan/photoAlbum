<?php
namespace App\Entity;

class Album
{
    /**
     * @var string
     */
    private $name;

    /**
     * Album constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAlbumUrl(): string
    {
        return '?' . http_build_query([
            'album' => $this->name
        ]);
    }

    /**
     * @return string
     */
    public function getPreviewUrl(): string
    {
        return '/images/' . $this->name . '/' . $this->name . '.jpg';
    }
}
