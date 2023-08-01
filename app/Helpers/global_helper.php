<?php

use App\Models\Metadata;

// Mendaftarkan di composer.json
function get_meta_value($meta_key)
{
    $data = Metadata::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    }
}
