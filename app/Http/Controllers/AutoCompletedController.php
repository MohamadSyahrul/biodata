<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AutoCompletedController extends Controller
{
    public function funcnegara(Request $request)
    {
        $query = $request->input('query');
        // $query = 'ind';


        $response = Http::get('https://insw-dev.ilcs.co.id/n/negara', [
            'ur_negara' => $query
        ]);

        $data = $response->json();

        $result = [];
        if (isset($data['data'])) {
            foreach ($data['data'] as $item) {
                $result[] = [
                    'label' => $item['ur_negara'],
                    'value' => $item['kd_negara']
                ];
            }
        }

        return response()->json($result);
    }

    public function funcbarang(Request $request)
    {
        $query = $request->input('query');
        // $query = '22030091';


        $response = Http::get('https://insw-dev.ilcs.co.id/n/barang', [
            'hs_code' => $query
        ]);

        $data = $response->json();

        $result = [];
        if (isset($data['data'])) {
            foreach ($data['data'] as $item) {
                $result[] = [
                    'label' => $item['hs_code_format'],
                    'uraian_id' => $item['uraian_id'],
                    'sub_header' => $item['sub_header']
                ];
            }
        }

        return response()->json($result);
    }
    
}
