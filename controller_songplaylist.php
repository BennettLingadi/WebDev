<?php

require_once("model_playlist.php");
require_once("model_song.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["songPlaylist"])) {
    $_SESSION["songPlaylist"] = array();
}

function createSongPlaylist()
{
    $songPlaylist = array(
        "playlistID" => $_POST["playlistID"],
        "songID" => $_POST["songID"]
    );

    array_push($_SESSION["songPlaylist"], $songPlaylist);
}

function getSongPlaylist()
{
    return $_SESSION["songPlaylist"];
}

function deleteSongPlaylist($index)
{
    unset($_SESSION["songPlaylist"][$index]);
}

function getPlaylistWithID($playlistID)
{
    return $_SESSION["playlist"][$playlistID];
}

function getSongWithID($songID)
{
    return $_SESSION["songlist"][$songID];
}

if (isset($_POST["addSongPlaylist"])) {
    createSongPlaylist();
    header("Location: view_songplaylist.php");
}

if (isset($_GET["deleteID"])) {
    deleteSongPlaylist($_GET["deleteID"]);
    header("Location: view_songplaylist.php");
}

?>