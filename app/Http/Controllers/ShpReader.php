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
           $data = $Geometry->getGeoJSON();
        }
        return view("index", ["data" => $data]);
    }
}
