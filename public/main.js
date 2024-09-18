import shp from "https://unpkg.com/shpjs@latest/dist/shp.esm.js";
import * as fs from "fs";
// const geojson = await shp("../../public/shp/bukit_makmur/Wilayah_Adm_Desa_Bukit_Makmur.shp");
const object = {};

object.shp = await fs.readFile(
    "shp/bukit_makmur/Wilayah_Adm_Desa_Bukit_Makmur.shp"
);
console.log(object);
