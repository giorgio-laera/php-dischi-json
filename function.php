<?php
function getDiscs (){
    $strig_discs = file_get_contents('./discs.json');

return json_decode($strig_discs, true);

}