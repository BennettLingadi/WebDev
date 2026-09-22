<?php
require("controller_song.php");
if (isset($_GET["updateID"])) {
    $song_id = $_GET["updateID"];
    $song = getSongWithID($song_id);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Playlist & Song System</title>
</head>

<body>
    <div class="container p-5">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_song.php">Song List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addsong.php">New Song</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <h1 class="text-center"> Update Song </h1>
                <form method="POST" action="controller_song.php">
                    <div class="row pt-5">
                        <div class="col">
                            <label for="inputSongName">Song Name</label>
                            <input type="text" class="form-control" name="inputSongName"
                                value="<?=$song->song_name?>">
                        </div>


                        <div class="col">
                            <label for="inputArtist">Artist</label>
                            <input type="text" class="form-control" name="inputArtist" value="<?=$song->artist?>">
                        </div>

                        <div class=" col">
                            <label for="inputAlbum">Album</label>
                            <input type="text" class="form-control" name="inputAlbum" value="<?=$song->album?>">
                        </div>
                    </div>
                    <input type="hidden" name="input_id" value="<?=$song_id?>">
                    <div class=" text-center">
                            <button name="updatebtn" type="submit" class="btn btn-primary mt-3">Update</button>
                        </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>