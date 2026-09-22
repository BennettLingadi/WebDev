<?php
include("model_playlist.php");
session_start();
if (!isset($_SESSION['playlist'])) {
    $_SESSION['playlist'] = array();
}

function createPlaylist(){
    $playlist = new model_playlist();
    $playlist->Playlist_name = $_POST['playlist_name'];
    $playlist->Description = $_POST['description'];
    array_push($_SESSION['playlist'], $playlist);
}
function UpdatePlaylist($playlistID){
    $playlist = $_SESSION ['playlist'][$playlistID];
    $playlist->Playlist_name = $_POST['playlist_name'];
    $playlist->Description = $_POST['description'];
   
}
function getPlaylist(){
    return $_SESSION['playlist'];
}
function deletePlaylist($index){
    unset($_SESSION['playlist'][$index]);
    
}
function getPlaylistWithID($index){
    return $_SESSION['playlist'][$index];
} 

if(isset($_POST['button_create'])){
    createPlaylist();
    header("Location: view_playlist.php");
}
if(isset($_GET['deleteID'])){
    deletePlaylist($_GET['deleteID']);
    header("Location: view_playlist.php");
}
if(isset($_POST['button_update'])){
    UpdatePlaylist($_POST['updateID']);
    header("Location: view_playlist.php");
}
?>