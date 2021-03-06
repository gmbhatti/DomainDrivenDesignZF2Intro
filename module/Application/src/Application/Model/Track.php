<?php

namespace Application\Model;

/**
 * @pattern-notes
 *
 * - This is an entity class, it also aggregates object: Artist & Album
 */
class Track
{
    protected $id;
    protected $title;
    protected $number;
    protected $length;
    protected $albumId;
    protected $album;
    protected $artistId;
    protected $artist;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setAlbum($album)
    {
        $this->album = $album;
    }

    /**
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $albumId
     */
    public function setAlbumId($albumId)
    {
        $this->albumId = $albumId;
    }

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * @param mixed $artistId
     */
    public function setArtistId($artistId)
    {
        $this->artistId = $artistId;
    }

    /**
     * @return mixed
     */
    public function getArtistId()
    {
        return $this->artistId;
    }


}