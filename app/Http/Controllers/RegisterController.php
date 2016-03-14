<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class RegisterController extends Controller
{

    var $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function register()
    {
        $record = new Record($this->request->all());
        $record->save();
        return View::make('pages.registeration_completed', $record->toArray());
    }

    private function store($data)
    {
    }
}
