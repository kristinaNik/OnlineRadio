<?php
/**
 * Created by PhpStorm.
 * User: kristina
 * Date: 9/26/19
 * Time: 10:07 PM
 */

namespace App\Interfaces;


interface PlayerRepositoryInterface
{

    public function store($musicData);

    public function getPlaylist();

    public function getTitles();

    public function getGenres();
}