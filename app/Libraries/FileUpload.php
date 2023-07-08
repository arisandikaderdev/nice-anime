<?php

namespace App\Libraries;

class FileUpload
{
    public function animeImg($img, $slug)
    {

        $img->move("anime/$slug/", "banner.jpg");

        die();
    }
}
