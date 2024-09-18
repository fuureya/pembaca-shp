<?php

namespace App\Http\Controllers;

use Shapefile\ShapefileReader;

class ShpReader extends Controller
{
    public function Pembaca()
    {
        $Shapefile = new ShapefileReader(public_path("shp/ADMINISTRASIKABKOTA_AR_50K.shp"));
        while ($Geometry = $Shapefile->fetchRecord()) {
            if ($Geometry->isDeleted()) {
                continue;
            }
            $data = $Geometry->getArray();
            // dd($data);
            foreach ($data['parts'] as $part) {
                foreach ($part['rings'] as $ring) {
                    foreach ($ring['points'] as $point) {
                        $allPoints[] = $point;
                    }
                }
            }

            // dd($allPoints);
        }
        return view("index", ["point" => $allPoints]);
    }
}
