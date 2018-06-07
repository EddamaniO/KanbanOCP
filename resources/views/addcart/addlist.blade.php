<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Trello-like</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
</head>
<body>
<div class="container-fluid">
    <a href="/">Retour</a>
</div>
<div class="container" id="tuto">
    <div class="panel panel-primary"">
        <div class="panel-heading">Add list</div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th class="col-sm-5">Titre</th>
                <th class="col-sm-5"></td>
            </tr>
            </thead>
            <tbody>
            <tr">
            <td><input type="texte" placeholder="Ajoutez un titre pour une liste" class="col-sm-12"</td>
            <td><button class="btn btn-warning btn-block"">Add</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>