<?php

namespace App\Http\Controllers\WebApps;

use App\Http\Controllers\RuleRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(RuleRequest $request)
    {

    }
}
