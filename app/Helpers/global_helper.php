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

function set_about_nama($nama)
{
    // nama = "Aditya Pratama"
    $arr = explode(" ", $nama); // Index pertama Aditya dan index kedua Pratama
    $kataAkhir = end($arr);
    $kataAkhir2 = "<span class='text-primary'>$kataAkhir</span>";
    array_pop($arr); // Aditya
    $namaAwal = implode(" ", $arr);
    return $namaAwal . " " . $kataAkhir2;
}

function set_list_award($content)
{
    $content = str_replace("<ul>", '<ul class="fa-ul mb-0">', $content);
    $content = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span><li/>', $content);
    return $content;
}
function set_list_workflow($content)
{
    $content = str_replace("<ul>", '<ul class="fa-ul mb-0">', $content);
    $content = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-check"></i></span><li/>', $content);
    return $content;
}
