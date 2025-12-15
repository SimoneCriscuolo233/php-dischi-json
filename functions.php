<?php

function readDisks()
{
    $json = file_get_contents('./disk-json.json');
    return json_decode($json, true);
}

function saveDisks($disks)
{
    file_put_contents(
        './disk-json.json',
        json_encode($disks, JSON_PRETTY_PRINT)
    );
}
