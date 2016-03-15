<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.03.2016
 * Time: 20:47
 */


$path = $_SERVER['DOCUMENT_ROOT'];

include_once $path . '/wp/wp-load.php';



//while (list ($key, $value) = each ($_POST))
//{
//    echo $key." => ".$value."<br />\n";
//}

$spielplan = new stdClass();


if(isset($_POST['submit'])) {

    $spielplan->termin  = isset($_POST['termin']) ? $_POST['termin'] : "";
    $spielplan->heim    = isset($_POST['heim']) ? $_POST['heim'] : "";
    $spielplan->gast    = isset($_POST['gast']) ? $_POST['gast'] : "";

    // Spieler Einzel
    $spielplan->einz_heim_spieler1 = isset($_POST['einz_heim_spieler1']) ? $_POST['einz_heim_spieler1'] : "";
    $spielplan->einz_gast_spieler1 = isset($_POST['einz_heim_spieler1']) ? $_POST['einz_heim_spieler1'] : "";
    $spielplan->einz_heim_spieler2 = isset($_POST['einz_heim_spieler2']) ? $_POST['einz_heim_spieler2'] : "";
    $spielplan->einz_gast_spieler2 = isset($_POST['einz_gast_spieler2']) ? $_POST['einz_gast_spieler2'] : "";
    $spielplan->einz_heim_spieler3 = isset($_POST['einz_heim_spieler3']) ? $_POST['einz_heim_spieler3'] : "";
    $spielplan->einz_gast_spieler3 = isset($_POST['einz_gast_spieler3']) ? $_POST['einz_gast_spieler3'] : "";
    $spielplan->einz_heim_spieler4 = isset($_POST['einz_heim_spieler4']) ? $_POST['einz_heim_spieler4'] : "";
    $spielplan->einz_gast_spieler4 = isset($_POST['einz_gast_spieler4']) ? $_POST['einz_gast_spieler4'] : "";

    //Ergebnisse Einzel

    $spielplan->einz_sp1_satz11 = isset($_POST['einz_sp1_satz11']) ? $_POST['einz_sp1_satz11'] : "";
    $spielplan->einz_sp1_satz12 = isset($_POST['einz_sp1_satz12']) ? $_POST['einz_sp1_satz12'] : "";
    $spielplan->einz_sp1_satz21 = isset($_POST['einz_sp1_satz21']) ? $_POST['einz_sp1_satz21'] : "";
    $spielplan->einz_sp1_satz22 = isset($_POST['einz_sp1_satz22']) ? $_POST['einz_sp1_satz22'] : "";
    $spielplan->einz_sp1_satz31 = isset($_POST['einz_sp1_satz31']) ? $_POST['einz_sp1_satz31'] : "";
    $spielplan->einz_sp1_satz32 = isset($_POST['einz_sp1_satz32']) ? $_POST['einz_sp1_satz32'] : "";

    $spielplan->einz_sp2_satz11 = isset($_POST['einz_sp2_satz11']) ? $_POST['einz_sp2_satz11'] : "";
    $spielplan->einz_sp2_satz12 = isset($_POST['einz_sp2_satz12']) ? $_POST['einz_sp2_satz12'] : "";
    $spielplan->einz_sp2_satz21 = isset($_POST['einz_sp2_satz21']) ? $_POST['einz_sp2_satz21'] : "";
    $spielplan->einz_sp2_satz22 = isset($_POST['einz_sp2_satz22']) ? $_POST['einz_sp2_satz22'] : "";
    $spielplan->einz_sp2_satz31 = isset($_POST['einz_sp2_satz31']) ? $_POST['einz_sp2_satz31'] : "";
    $spielplan->einz_sp2_satz32 = isset($_POST['einz_sp2_satz32']) ? $_POST['einz_sp2_satz32'] : "";

    $spielplan->einz_sp3_satz11 = isset($_POST['einz_sp3_satz11']) ? $_POST['einz_sp3_satz11'] : "";
    $spielplan->einz_sp3_satz12 = isset($_POST['einz_sp3_satz12']) ? $_POST['einz_sp3_satz12'] : "";
    $spielplan->einz_sp3_satz21 = isset($_POST['einz_sp3_satz21']) ? $_POST['einz_sp3_satz21'] : "";
    $spielplan->einz_sp3_satz22 = isset($_POST['einz_sp3_satz22']) ? $_POST['einz_sp3_satz22'] : "";
    $spielplan->einz_sp3_satz31 = isset($_POST['einz_sp3_satz31']) ? $_POST['einz_sp3_satz31'] : "";
    $spielplan->einz_sp3_satz32 = isset($_POST['einz_sp3_satz32']) ? $_POST['einz_sp3_satz32'] : "";

    $spielplan->einz_sp4_satz11 = isset($_POST['einz_sp4_satz11']) ? $_POST['einz_sp4_satz11'] : "";
    $spielplan->einz_sp4_satz12 = isset($_POST['$inz_sp4_satz12']) ? $_POST['$inz_sp4_satz12'] : "";
    $spielplan->einz_sp4_satz21 = isset($_POST['einz_sp4_satz21']) ? $_POST['einz_sp4_satz21'] : "";
    $spielplan->einz_sp4_satz22 = isset($_POST['einz_sp4_satz22']) ? $_POST['einz_sp4_satz22'] : "";
    $spielplan->einz_sp4_satz31 = isset($_POST['einz_sp4_satz31']) ? $_POST['einz_sp4_satz31'] : "";
    $spielplan->einz_sp4_satz32 = isset($_POST['einz_sp4_satz32']) ? $_POST['einz_sp4_satz32'] : "";

    // Spieler Doppe$spielplan->

    $spielplan->dop1_heim_spieler1 = isset($_POST['dop1_heim_spieler1']) ? $_POST['dop1_heim_spieler1'] : "";
    $spielplan->dop1_heim_spieler2 = isset($_POST['dop1_heim_spieler2']) ? $_POST['dop1_heim_spieler2'] : "";
    $spielplan->dop1_gast_spieler1 = isset($_POST['dop1_gast_spieler1']) ? $_POST['dop1_gast_spieler1'] : "";
    $spielplan->dop1_gast_spieler2 = isset($_POST['dop1_gast_spieler2']) ? $_POST['dop1_gast_spieler2'] : "";
    $spielplan->dop2_heim_spieler1 = isset($_POST['dop2_heim_spieler1']) ? $_POST['dop2_heim_spieler1'] : "";
    $spielplan->dop2_heim_spieler2 = isset($_POST['dop2_heim_spieler2']) ? $_POST['dop2_heim_spieler2'] : "";
    $spielplan->dop2_gast_spieler1 = isset($_POST['dop2_gast_spieler1']) ? $_POST['dop2_gast_spieler1'] : "";
    $spielplan->dop2_gast_spieler2 = isset($_POST['dop2_gast_spieler2']) ? $_POST['dop2_gast_spieler2'] : "";

    // Ergebnisse Doppel

    $spielplan->dop1_satz11 = isset($_POST['dop1_satz11']) ? $_POST['dop1_satz11'] : "";
    $spielplan->dop1_satz12 = isset($_POST['dop1_satz12']) ? $_POST['dop1_satz12'] : "";
    $spielplan->dop1_satz21 = isset($_POST['dop1_satz21']) ? $_POST['dop1_satz21'] : "";
    $spielplan->dop1_satz22 = isset($_POST['dop1_satz22']) ? $_POST['dop1_satz22'] : "";
    $spielplan->dop1_satz31 = isset($_POST['dop1_satz31']) ? $_POST['dop1_satz31'] : "";
    $spielplan->dop1_satz32 = isset($_POST['dop1_satz32']) ? $_POST['dop1_satz32'] : "";

    $spielplan->dop2_satz11 = isset($_POST['dop2_satz11']) ? $_POST['dop2_satz11'] : "";
    $spielplan->dop2_satz12 = isset($_POST['dop2_satz12']) ? $_POST['dop2_satz12'] : "";
    $spielplan->dop2_satz21 = isset($_POST['dop2_satz21']) ? $_POST['dop2_satz21'] : "";
    $spielplan->dop2_satz22 = isset($_POST['dop2_satz22']) ? $_POST['dop2_satz22'] : "";
    $spielplan->dop2_satz31 = isset($_POST['dop2_satz31']) ? $_POST['dop2_satz31'] : "";
    $spielplan->dop2_satz32 = isset($_POST['dop2_satz32']) ? $_POST['dop2_satz32'] : "";

    $submit = isset($_POST['submit']) ? $_POST['submit'] : "";
}


function object_to_array($data)
{
    if (is_array($data) || is_object($data))
    {
        $result = array();
        foreach ($data as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}

$arrResult = object_to_array($spielplan);


$arrSql = array_keys($arrResult);


$wpdb->insert( 'wp_tcb_spielplaene',$arrResult);

