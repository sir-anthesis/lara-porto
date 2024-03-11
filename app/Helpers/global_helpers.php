<?php
use App\Models\metadata;

function getMetaValue($meta_key)
{
    $data = metadata::where('meta_key', $meta_key)->first();

    if ($data) {
        return $data->meta_value;
    }
}

?>