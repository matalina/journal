<?php

namespace App\Http\Controllers\RapidLogging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Resources\TypeResource;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::get();

        return TypeResource::collection($types);
    }
}
