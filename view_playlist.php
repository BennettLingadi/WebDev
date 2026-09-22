<?php require("controller_playlist.php"); ?>
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
                        <a class="nav-link active" href="view_playlist.php">Playlist</a>
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
                        <a class="nav-link" href="view_addsongplaylist.php">New Playlist and Song</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_songplaylist.php">Playlist and Song List</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="container p-5">
                    <h1> Playlist </h1>

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Playlist Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allPlaylists = getPlaylist();
                            foreach ($allPlaylists as $index => $playlist) {
                                $counter++;
                            
                            ?>
                            <tr>
                                <th scope="row"><?=$counter;?></th>
                                <td><?=$playlist->Playlist_name;?></td>
                                <td><?=$playlist->Description;?></td>

                                <td>
                                    <a href="view_updateplaylist.php?updateID=<?=$index;?>">
                                    <button class="btn btn-warning">Update</button>
                                    </a>
                                    <a href="controller_playlist.php?deleteID=<?=$index;?>">
                                    <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>

</body>

</html>