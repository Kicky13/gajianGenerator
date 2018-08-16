<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuleRequest extends Request
{
    public function rules()
    {
        return [
            'title' => '',
            'body' => '',
            'publish_at' => ''
        ];
    }
}
