<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AutoCompletedController extends Controller
{
    public function funcnegara(Request $request)
    {
        $query = $request->input('query');

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

 
    // public function funcpelabuhan(Request $request)
    // {
    //     // $keyword = 'Pa';
    //     $keyword  = $request->input('keyword');

    //     // Ambil kd_negara dari fungsi funcnegara
    //     $responseNegara = $this->funcnegara($request->input('query'));
    //     $kd_negara = $responseNegara['value'];

    //     $response = Http::get('https://insw-dev.ilcs.co.id/n/pelabuhan', [
    //         'kd_negara' => $kd_negara,
    //         'ur_pelabuhan' => $keyword
    //     ]);

    //     $data  = $response->json();
        
    //     $result = [];
    //     if (isset($data['data'])) {
    //         foreach ($data['data'] as $r) {
    //             $result[] = [
    //                 'label' => $r['ur_pelabuhan'],
    //                 'value' => $r['kd_pelabuhan']
    //             ];
    //         }
    //     }

    //     return response()->json($result);
    // }

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
