<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Env;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GetEnvController extends Controller
{
    /**
     * @param Request $request
     */
    public function getEnv(Request $request)
    {
        /** @var Env $envModel*/
        $envModel = Env::query()->find($request->offsetGet("env"));

        if (!is_null($envModel)) {
            /*@todo: make file from data, instead of keep files*/
            $file = $envModel->getMedia();
            return response()->download($file->first()->getPath());
        }

        return new Response([],404);
    }
}
