<?php

namespace App\Http\Controllers;

use App\Board;

/*use Illuminate\Http\Request;

use App\Http\Requests;
*/

class HomeBoardController extends Controller
{
    public function home(){
        return view('homeboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Titre' => 'required|string|max:255|unique:board',
            'Description' => 'required|string|max:255',
        ]);
    }

    protected function create(array $data)
    {
       return Board::create([
           'Titre' =>$data['Titre'],
           'Description' => $data['Description'],
       ]);
    }
}