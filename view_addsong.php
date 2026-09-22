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
                        <a class="nav-link active" href="view_addsong.php">New Song</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <h1 class="text-center"> New Song </h1>
                <form>
                    <div class="row pt-5">
                        <div class="col">
                            <label for="inputSongName">Song Name</label>
                            <input type="text" class="form-control" id="inputSongName">
                        </div>


                        <div class="col">
                            <label for="inputArtist">Artist</label>
                            <input type="text" class="form-control" id="inputArtist">
                        </div>

                        <div class="col">
                            <label for="inputAlbum">Album</label>
                            <input type="text" class="form-control" id="inputAlbum">
                        </div>
                    </div>
                    <div class="text-center">
                         <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                   
                </form>
            </div>
        </div>

    </div>
</body>

</html>