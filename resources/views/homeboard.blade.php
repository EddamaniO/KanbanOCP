@extends('layouts.homeb')

@section('content')
    <div class="card kiki">
        <div class="card-header">
            <h5>Titre du board <button type="button" class="btn btn-primary slide" data-toggle="modal" data-target="#myModal">Ajouter un membre</button></h5>

        </div>
        <div class="card-body">
            <h5 class="card-title">{{__('homeb.description')}}</h5>
            <p class="card-text">Bla bla bla bla</p>
            <a href="#" class="btn btn-default">{{__('homeb.afficher')}}</a>
        </div>
    </div>
        <div class="card truc">
            <div class="card-header">
                <button type="button" class="btn btn-primary koko" data-toggle="modal" data-target="#plus">+</button>
            </div>
        </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Chercher un membre')}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="q"
                                   placeholder="Recherche de membre">
                        </div>
                        <div class="modal-footer">
                            <form action="/search" method="POST" role="search">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#try">
                                    {{__('Rechercher')}}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id ="#try">
        <div class="modal-dialog">
            <div class="modal-header">
                    @if(isset($details))
                        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        <h2>Sample User details</h2>
            </div>
                <div class="modal-body">
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        @endif
    <div class="modal fade" id="plus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add a Board</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <form>
                                <div class="form-group">
                            <input type="text" class="form-control" name="q"
                                   placeholder="Add Title">
                        </div>
                                <div class="form-group">
                        <input type="text" class="form-control" name="q"
                               placeholder="Add description">
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-primary active">Add</a>
                </div>
            </div>
        </div>
    </div>
@endsection