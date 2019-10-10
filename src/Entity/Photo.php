<?php
namespace App\Entity;

class Photo
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $albumName;

    /**
     * Photo constructor.
     * @param string $name
     * @param string $albumName
     */
    public function __construct(string $name, string $albumName)
    {
        $this->name = $name;
        $this->albumName = $albumName;
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
    public function getAlbumName(): string
    {
        return $this->albumName;
    }
    /**
     * @return string
     */
    public function getPhotoUrl(): string
    {
        return '/images/' . $this->albumName . '/' . $this->name;
    }
    /**
     * @return string
     */
    public function getAlbumUrl(): string
    {
        return '?' . http_build_query([
                'album' => $this->albumName
            ]);
    }
}
