<?php

namespace rest;

require_once ROOT_DIR . 'controllers/auth/loginController.php';
require_once ROOT_DIR . 'controllers/auth/registerController.php';
require_once ROOT_DIR . 'controllers/music/createMusicController.php';
require_once ROOT_DIR . 'controllers/music/getMusicController.php';
require_once ROOT_DIR . 'controllers/music/getAudioController.php';
require_once ROOT_DIR . 'controllers/music/getGenresController.php';
require_once ROOT_DIR . 'controllers/music/getMusicCoverController.php';
require_once ROOT_DIR . 'controllers/music/searchMusicController.php';
require_once ROOT_DIR . 'controllers/music/getAllMusicController.php';
require_once ROOT_DIR . 'controllers/music/adminCreateMusicController.php';
require_once ROOT_DIR . 'controllers/music/adminDeleteMusicController.php';
require_once ROOT_DIR . 'controllers/music/adminUpdateMusicController.php';
require_once ROOT_DIR . 'controllers/user/getUserController.php';

use controllers\auth\LoginController;
use controllers\auth\RegisterController;
use controllers\music\AdminCreateMusicController;
use controllers\music\AdminDeleteMusicController;
use controllers\music\AdminUpdateMusicController;
use controllers\music\CreateMusicController;
use controllers\music\GetAllMusicController;
use controllers\music\GetAudioController;
use controllers\music\GetGenresController;
use controllers\music\GetMusicController;
use controllers\music\GetMusicCoverController;
use controllers\music\GetUserController;
use controllers\music\SearchMusicController;

// TODO: move this to /router

class APIRoutes
{
    public static array $apiroutes = [
        ['/api/login', 'post', LoginController::class],
        ['/api/register', 'post', RegisterController::class],
        ['/api/music', 'post', CreateMusicController::class],
        ['/api/music/*', 'get', GetMusicController::class],
        ['/api/audio/*', 'get', GetAudioController::class],
        ['/api/music-cover/*', 'get', GetMusicCoverController::class],
        ['/api/user/*', 'get', GetUserController::class],
        ['/api/search', 'get', SearchMusicController::class],
        ['/api/genres', 'get', GetGenresController::class],
        ['/api/admin/music', 'get', GetAllMusicController::class],
        ['/api/admin/music', 'post', AdminCreateMusicController::class],
        ['/api/admin/music/*', 'delete', AdminDeleteMusicController::class],
        ['/api/admin/music/*', 'post', AdminUpdateMusicController::class],
    ];
}
