<?php

namespace App\Http\Controllers;

use Shapefile\ShapefileReader;

class ShpReader extends Controller
{
    public function Pembaca()
    {
        $Shapefile = new ShapefileReader(public_path("shp/gowa/AGRIKEBUN_AR_50K.shp"));
        // $Shapefile = new ShapefileReader(public_path("shp/Wilayah_Adm_Desa_Bukit_Makmur.shp"));
        // while ($Geometry = $Shapefile->fetchRecord()) {
        //     if ($Geometry->isDeleted()) {
        //         continue;
        //     }
        //     $data = $Geometry->getArray();
        //     // dd($data);
        //     foreach ($data['parts'] as $part) {
        //         foreach ($part['rings'] as $ring) {
        //             foreach ($ring['points'] as $point) {
        //                 $allPoints[] = $point;
        //             }
        //         }
        //     }

        //     dd($allPoints);
        // }

        // dd($Shapefile);

        $allPoints = []; // Inisialisasi array kosong untuk menampung semua titik

        while ($Geometry = $Shapefile->fetchRecord()) {
            if ($Geometry->isDeleted()) {
                continue;
            }

            $data = $Geometry->getArray();
            //  dd($data);
            // foreach ($data['parts'] as $part) {

            //     foreach ($part['rings'] as $ring) {
            //         foreach ($ring['points'] as $point) {
            //             // Ambil hanya nilai x dan y dari setiap point
            //             $allPoints[] = [
            //                 'x' => $point['x'],
            //                 'y' => $point['y'],

            //             ];
            //         }
            //     }
            // }

            // dd($allPoints);

            //    foreach ($data['rings'] as $ring) {
            //             foreach ($ring['points'] as $point) {
            //                 // Ambil hanya nilai x dan y dari setiap point
            //                 $allPoints[] = [
            //                     'x' => $point['x'],
            //                     'y' => $point['y'],
            //                 ];
            //             }
            //         }


            // Hanya untuk debugging, matikan untuk pengujian sesungguhnya
            // dd($allPoints);
        }
        return view("index", ["point" => $allPoints]);
    }
}
