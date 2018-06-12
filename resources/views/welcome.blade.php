<!DOCTYPE html>
<html>
<head>
    <title>search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style>
    .sl{
        margin-left: 850px;
    }
</style>
<body>
<div class="container">
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                   placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
        </div>
    </form>
    <div class="container">
        @if(isset($details)).

            <h2>Response</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td> <button type="submit" class="btn-primary sl">Ajouter</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @elseif(isset($message))
            <p>{{ $message }}</p>
        @endif
    </div>
</div>
</body>
</html>
