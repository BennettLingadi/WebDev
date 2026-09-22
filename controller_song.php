<?php
include("model_song.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["songlist"])) {
    $_SESSION["songlist"] = array();
}
function createSong(){
    $song = new model_song();
    $song->song_name = $_POST["inputSongName"];
    $song->artist = $_POST["inputArtist"];
    $song->album = $_POST["inputAlbum"];
    array_push($_SESSION["songlist"], $song);
}

function getAllSong(){
    return $_SESSION["songlist"];
}

function deleteSong($songIndex){
    unset($_SESSION["songlist"][$songIndex]);
}

function getSongWithID($songID){
    return $_SESSION["songlist"][$songID];
}

function updateSong($song_id){
    $song = $_SESSION["songlist"][$song_id];
    $song->song_name = $_POST["inputSongName"];
    $song->artist = $_POST["inputArtist"];
    $song->album = $_POST["inputAlbum"];
}

if (isset($_POST["submitSong"])) {
    createSong();
    header("Location: view_song.php");
}

if (isset($_GET['deleteID'])) {
    deleteSong($_GET['deleteID']);
    header("Location: view_song.php");
}

if (isset($_POST["updatebtn"])) {
    updateSong($_POST["input_id"]);
    header("Location: view_song.php");
}

?>