<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="header row d-flex">
            <h1>Transformers</h1>
        </div>
        <div class="nav row d-flex justify-content-around">
            <div class="col-2"></div>
            <div class="search-bar col-4">
                <input type="text" placeholder="Search..."></input>
            </div>
            <div class="filter-select col-2">
                <label>Autobots</label>
                <input type="checkbox"></input>
            </div>
            <div class="filter-select col-2">
                <label>Insecticons</label>
                <input type="checkbox"></input>
            </div>
            <div class="filter-select col-2">
                <label>Decepticons</label>
                <input type="checkbox"></input>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="card-container"></div>
    </body>
</html>