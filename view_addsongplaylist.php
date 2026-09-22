<?php
require_once("controller_playlist.php");
require_once("controller_song.php");

$allPlaylist = getPlaylist();
$allSong = getAllSong();
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
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_playlist.php">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addplaylist.php">New Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_song.php">Song List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addsong.php">New Song</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addsongplaylist.php">New Playlist and Song</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_songplaylist.php">Playlist and Song List</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="container p-5">
                    <div class="container mt-5">

                        <div class="card p-4">

                            <h2 class="text-center mb-4">Add Song to Playlist</h2>

                            <form method="POST" action="controller_songPlaylist.php">

                                <div class="mb-3">
                                    <label class="form-label">Playlist</label>

                                    <select class="form-select" name="playlistID" required>

                                        <option value="">-- Select Playlist --</option>

                                        <?php foreach ($allPlaylist as $index => $playlist) { ?>

                                            <option value="<?= $index ?>">
                                                <?= $playlist->Playlist_name ?>
                                            </option>

                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Song</label>

                                    <select class="form-select" name="songID" required>

                                        <option value="">-- Select Song --</option>

                                        <?php foreach ($allSong as $index => $song) { ?>

                                            <option value="<?= $index ?>">
                                                <?= $song->song_name ?> - <?= $song->artist ?>
                                            </option>

                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="d-flex justify-content-between">

                                    <a href="view_songPlaylist.php" class="btn btn-secondary">
                                        Back
                                    </a>

                                    <button type="submit" name="addSongPlaylist" class="btn btn-primary">
                                        Add Song to Playlist
                                    </button>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

</body>

</html>