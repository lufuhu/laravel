<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function response($data = null, $message = 'success', $code = 200, $append = [])
    {
        return response([
            'data' => $data,
            'code' => $code,
            'message' => $message,
            'status' => 1,
            'append' => $append
        ]);
    }
    public function parseEnum($data){
        $list = [];
        foreach ($data as $k=>$v){
            $list[] = [
                'key' => $k,
                'value' => $v,
            ];
        }
        return $list;
    }
}
