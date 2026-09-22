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
                        <a class="nav-link" href="view_playlist.php">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_addplaylist.php">New Playlist</a>
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
                <h1 class="text-center"> New Playlist </h1>
                <form method="POST" action="controller_playlist.php">
                    <div class="row pt-5">
                        <div class="col">
                            <label for="inputPlaylistName">Playlist Name</label>
                            <input type="text" class="form-control" id="inputPlaylistName" name="playlist_name">
                        </div>


                        <div class="col">
                            <label for="inputDescription">Description</label>
                            <input type="text" class="form-control" id="inputDescription" name="description">
                        </div>

                    </div>
                    <div class="text-center">
                         <button name="button_create" button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                   
                </form>
            </div>
        </div>

    </div>
</body>

</html>