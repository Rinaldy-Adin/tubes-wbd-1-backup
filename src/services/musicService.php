<?php

namespace services;

require_once ROOT_DIR . 'models/musicModel.php';
require_once ROOT_DIR . 'repositories/musicRepository.php';
require_once ROOT_DIR . 'repositories/userRepository.php';

use models\MusicModel;
use repositories\MusicRepository;
use repositories\UserRepository;

class MusicService
{
    private MusicRepository $musicRepo;

    function __construct()
    {
        $this->musicRepo = new MusicRepository();
    }
    
    function getByUserID(int $userId, int $page) : array
    {
        return $this->musicRepo->getByUserId($userId, $page);
    }
    
    function countAllMusic() : ?int
    {
        return $this->musicRepo->countAllMusic();
    }

    function countMusicBy($where=[]) : ?int
    {
        return $this->musicRepo->countMusicBy($where);
    }
    function getByMusicId(string $musicId): ?MusicModel
    {
        return $this->musicRepo->getByMusicId($musicId);
    }

    function getAudioPathByMusicId(string $musicId): ?string
    {
        return $this->musicRepo->getAudioPathByMusicId($musicId);
    }

    function getCoverPathByMusicId(string $musicId): ?string
    {
        return $this->musicRepo->getCoverPathByMusicId($musicId);
    }

    function searchMusic(string $searchValue, int $page, string $genre, string $uploadPeriod, string $sort): array
    {
        return $this->musicRepo->searchMusic($searchValue, $page, $genre, $uploadPeriod, $sort);
    }

    function getAllGenres(): array {
        return $this->musicRepo->getAllGenres();
    }

    function createMusic(int $user_id, string $title, string $genre, array $musicFile, ?array $coverFile): ?MusicModel
    {
        $music = $this->musicRepo->createMusic($title, $user_id, $genre, $musicFile, $coverFile);

        return $music;
    }
}
?>