<script LANGUAGE="javascript">
    function showTermin(termin_no,str_arr_termin){
        var obj_div;
        var arr_termin = new Array();
        arr_termin=str_arr_termin.split(",");

        for(var i=0;i<arr_termin.length;i++){
            obj_div=document.getElementById("div_spielplan_"+arr_termin[i]);
            document.getElementById("link_spielplan_"+arr_termin[i]).style.display='block';
            obj_div.style.display='none';
        }
        obj_div=document.getElementById("div_spielplan_"+termin_no);
        document.getElementById("link_spielplan_"+termin_no).style.display='none';
        obj_div.style.display='block';

    }
</script>

<style TYPE="text/css">
    .border_l{
        border-left:1px solid;
    }
    .border_r{
        border-right:1px solid;
    }
    .border_o{
        border-top:1px solid;
    }
    .border_b{
        border-bottom:1px solid;
    }
</style>
<div class="ueberschriften_gr">Spielpl�ne</div>
<br />
<?

function str_to_date($str_date){
    $t_str=substr($str_date,6,2).".".substr($str_date,4,2).".".substr($str_date,0,4);
    return $t_str;
}
include("inc/connect.php");

$sql="select id, ueberschrift  from mannschaft order by id";

$q_mannschaft=mysql_query($sql);

$cnt=0;

while($r_mannschaft=mysql_fetch_array($q_mannschaft)){
    $mannschaft_ueberschrift=$r_mannschaft['ueberschrift'];
    $mannschaft_id=$r_mannschaft['id'];



    $sql="select * from spielplan where mannschaft_id=$mannschaft_id and str_datum<>''  order by str_datum desc";
    $q_spielplan=mysql_query($sql);

    if(mysql_num_rows($q_spielplan)>0){

        if($cnt>0)echo("<br style='clear:both;'/><hr />");
        $cnt++;

        echo("<a title='Mannschaft $mannschaft_ueberschrift' name='mannschaft_$mannschaft_id'></a>");
        echo("<div class='ueberschriften_gr'>$mannschaft_ueberschrift</div>");
    }

    $nr_spielplan=0;
    $spielplan_arr=array();
    $spielplan_id_arr=array();


    while($r_spielplan=mysql_fetch_array($q_spielplan)){

        $termin=$r_spielplan['str_datum'];
        $termin=str_to_date($termin);


        $str_heim_name=$r_spielplan['str_heim_name'];
        $str_gast_name=$r_spielplan['str_gast_name'];
        if($termin!=""){
            $spielplan_arr[]=$termin;
            $einzelspiel=array();
            $spielplan_id=$r_spielplan['id'];
            $spielplan_id_arr[]=$spielplan_id;

            $einzelspiel[1]=$r_spielplan['einzelspiel_1'];
            $einzelspiel[2]=$r_spielplan['einzelspiel_2'];
            $einzelspiel[3]=$r_spielplan['einzelspiel_3'];
            $einzelspiel[4]=$r_spielplan['einzelspiel_4'];
            $doppelspiel[1]=$r_spielplan['doppelspiel_1'];
            $doppelspiel[2]=$r_spielplan['doppelspiel_2'];

            $nr_spielplan++;

            if($nr_spielplan>1){
                $div_visible='none';
            }else{
                $div_visible='block';
            }

            echo("<div style='margin-left:170px;margin-top:20px;display:$div_visible;' id='div_spielplan_$spielplan_id'>");

            echo("<div class='ueberschriften'>Termin: $termin &nbsp; &nbsp; &nbsp; $str_heim_name : $str_gast_name</div><br />");

            echo("<b>Einzel</b><br /><br /><table cellspacing='0' cellpadding='5'>");
            echo("<tr><td width='100' class='border_l border_o'>Heimspieler</td><td width='100' class='border_l border_o'>Gastspieler</td><td class='border_l border_o'>1.Satz</td><td class='border_l border_o'>2.Satz</td><td class='border_l border_o'>3.Satz</td><td colspan='2' class='border_l border_o border_b' style='text-align:center'>Matchpunkte</td><td colspan='2' class='border_l border_o border_b' style='text-align:center'>S�tze</td><td colspan='2' style='text-align:center' class='border_l border_r border_o border_b'>Spiele</td></tr>");
            echo("<tr><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>Heim</td><td class='border_l border_b'>Gast</td><td class='border_l border_b'>Heim</td><td class='border_l border_b'>Gast</td><td class='border_l border_b'>Heim</td><td class='border_l border_r border_b'>Gast</td></tr>");

            $summe_match_heim=0;
            $summe_match_gast=0;

            $summe_satz_heim=0;
            $summe_satz_gast=0;

            $summe_spiele_heim=0;
            $summe_spiele_gast=0;

            $tr_background="#D9D9D9";

            for($i=1;$i<5;$i++){

                if($tr_background=="#FFFFFF"){
                    $tr_background="#D9D9D9";
                }else{
                    $tr_background="#FFFFFF";
                }

                $sql="select * from spiel where id=".$einzelspiel[$i];

                $q_spiel=mysql_query($sql);
                $r_spiel=mysql_fetch_array($q_spiel);

                $spieler_heim=$r_spiel['spieler_1_heim'];
                $spieler_gast=$r_spiel['spieler_1_gast'];
                $satz_1=$r_spiel['satz_1'];
                $satz_2=$r_spiel['satz_2'];
                $satz_3=$r_spiel['satz_3'];

                if($satz_1!==""){

                    $pos_trenner=strpos($satz_1,':');
                    $satz_1_h=intval(substr($satz_1,0,$pos_trenner));
                    $satz_1_g=intval(substr($satz_1,$pos_trenner+1));

                    $pos_trenner=strpos($satz_2,':');
                    $satz_2_h=intval(substr($satz_2,0,$pos_trenner));
                    $satz_2_g=intval(substr($satz_2,$pos_trenner+1));

                    $pos_trenner=strpos($satz_3,':');
                    $satz_3_h=intval(substr($satz_3,0,$pos_trenner));
                    $satz_3_g=intval(substr($satz_3,$pos_trenner+1));

                    $satz=array();
                    $match=array('0','0');
                    $spiele=array();

                    if($satz_1_h>$satz_1_g){$satz[1][1]=1;}else{$satz[1][2]=1;}
                    if($satz_2_h>$satz_2_g){$satz[1][1]+=1;}else{$satz[1][2]+=1;}
                    if($satz_3_h>$satz_3_g){$satz[1][1]+=1;}else{$satz[1][2]+=1;}

                    $spiele[1]= $satz_1_h+$satz_2_h+$satz_3_h;
                    $spiele[2]= $satz_1_g+$satz_2_g+$satz_3_g;

                    //echo("-- $satz_1_h -- $satz_1_g --");

                    if($satz[1][1]>$satz[1][2]){$match[1][1]=1;$match[1][2]=0;}else{$match[1][2]=1;$match[1][1]=0;}

                    echo("<tr style='background:$tr_background'><td class='border_l'>$spieler_heim</td><td class='border_l'>$spieler_gast</td>");
                    echo("<td class='border_l'>$satz_1</td><td class='border_l'>$satz_2</td><td class='border_l'>$satz_3</td>");
                    echo("<td class='border_l'>".$match[1][1]."</td><td class='border_l'>".$match[1][2]."</td>");
                    echo("<td class='border_l'>".$satz[1][1]."</td><td class='border_l'>".$satz[1][2]."</td>");
                    echo("<td class='border_l'>".$spiele[1]."</td><td class='border_l border_r'>".$spiele[2]."</td></tr>");

                    $summe_match_heim+= $match[1][1];
                    $summe_match_gast+= $match[1][2];

                    $summe_satz_heim+=  $satz_1;
                    $summe_satz_gast+=  $satz_2;

                    $summe_spiele_heim+=  $spiele[1];
                    $summe_spiele_gast+=  $spiele[2];


                }

            }//for $i
            echo("<tr style='font-weight:bold;'><td colspan='5' align='right' class='border_o'><b>Einzel Summe</b></td><td class='border_l border_b border_o'>$summe_match_heim</td><td class='border_l border_b border_o'>$summe_match_gast</td><td class='border_l border_b border_o'>$summe_satz_heim</td><td class='border_l border_b border_o'>$summe_satz_gast</td><td class='border_l border_b border_o'>$summe_spiele_heim</td><td class='border_l border_o border_r border_b'>$summe_spiele_gast</td></tr>");
            echo("</table><br /><br />");


            // DOPPELSPIEL -----------------------------------------------------------------------------

            echo("<b>Doppel</b><br /><br /><table cellspacing='0' cellpadding='5'>");
            echo("<tr><td width='100' class='border_l border_o'>Heimspieler</td><td width='100' class='border_l border_o'>Gastspieler</td><td class='border_l border_o'>1.Satz</td><td class='border_l border_o'>2.Satz</td><td class='border_l border_o'>3.Satz</td><td colspan='2' class='border_l border_o border_b' style='text-align:center'>Matchpunkte</td><td colspan='2' class='border_l border_o border_b' style='text-align:center'>S�tze</td><td colspan='2' style='text-align:center' class='border_l border_r border_o border_b'>Spiele</td></tr>");
            echo("<tr><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>&nbsp;</td><td class='border_l border_b'>Heim</td><td class='border_l border_b'>Gast</td><td class='border_l border_b'>Heim</td><td class='border_l border_b'>Gast</td><td class='border_l border_b'>Heim</td><td class='border_l border_r border_b'>Gast</td></tr>");

            $summe_match_heim_doppel=0;
            $summe_match_gast_doppel=0;

            $summe_satz_heim_doppel=0;
            $summe_satz_gast_doppel=0;

            $summe_spiele_heim_doppel=0;
            $summe_spiele_gast_doppel=0;

            $tr_background="#D9D9D9";

            for($i=1;$i<3;$i++){

                if($tr_background=="#FFFFFF"){
                    $tr_background="#D9D9D9";
                }else{
                    $tr_background="#FFFFFF";
                }

                $sql="select * from spiel where id=".$doppelspiel[$i];
                // echo $sql;
                $q_spiel=mysql_query($sql);
                $r_spiel=mysql_fetch_array($q_spiel);
                // echo " - ".mysql_num_rows($q_spiel)."<br>";
                $spieler_heim=$r_spiel['spieler_1_heim'];
                $spieler_gast=$r_spiel['spieler_1_gast'];
                $spieler_heim_2=$r_spiel['spieler_2_heim'];
                $spieler_gast_2=$r_spiel['spieler_2_gast'];
                $satz_1=$r_spiel['satz_1'];
                $satz_2=$r_spiel['satz_2'];
                $satz_3=$r_spiel['satz_3'];

                $satz_1_h=intval(substr($satz_1,0,1));
                $satz_1_g=intval(substr($satz_1,2,1));

                $satz_2_h=intval(substr($satz_2,0,1));
                $satz_2_g=intval(substr($satz_2,2,1));

                $satz_3_h=intval(substr($satz_3,0,1));
                $satz_3_g=intval(substr($satz_3,2,1));

                $satz=array();
                $match=array();
                $spiele=array();

                if($satz_1_h>$satz_1_g){$satz[1][1]=1;}else{$satz[1][2]=1;}
                if($satz_2_h>$satz_2_g){$satz[1][1]+=1;}else{$satz[1][2]+=1;}
                if($satz_3_h>$satz_3_g){$satz[1][1]+=1;}else{$satz[1][2]+=1;}

                $spiele[1]= $satz_1_h+$satz_2_h+$satz_3_h;
                $spiele[2]= $satz_1_g+$satz_2_g+$satz_3_g;

                if($satz_1_h>0 || $satz_1_g>0){
                    echo "satz 1 1 ";
                    if($satz[1][1]>$satz[1][2]){$match[1][1]=1;$match[1][2]=0;}else{$match[1][2]=1;$match[1][1]=0;}
                    echo("<tr style='background:$tr_background'><td class='border_l'>$spieler_heim<hr />$spieler_heim_2</td>
                                                                    <td class='border_l'>$spieler_gast<hr />$spieler_gast_2</td>");
                    echo("<td class='border_l'>$satz_1</td><td class='border_l'>$satz_2</td><td class='border_l'>$satz_3</td>");
                    echo("<td class='border_l'>".$match[1][1]."</td><td class='border_l'>".$match[1][2]."</td>");
                    echo("<td class='border_l'>".$satz[1][1]."</td><td class='border_l'>".$satz[1][2]."</td>");
                    echo("<td class='border_l'>".$spiele[1]."</td><td class='border_l border_r'>".$spiele[2]."</td></tr>");

                    $summe_match_heim_doppel+= $match[1][1];
                    $summe_match_gast_doppel+= $match[1][2];

                    $summe_satz_heim_doppel+=  $satz_1;
                    $summe_satz_gast_doppel+=  $satz_2;

                    $summe_spiele_heim_doppel+=  $spiele[1];
                    $summe_spiele_gast_doppel+=  $spiele[2];


                }else{echo "NICHT satz 1 1 ";}

            }//for $i
            echo("<tr style='font-weight:bold;'><td colspan='5' align='right' class='border_o'><b>Doppel Summe</b></td><td class='border_l border_b border_o'>$summe_match_heim_doppel</td><td class='border_l border_b border_o'>$summe_match_gast_doppel</td><td class='border_l border_b border_o'>$summe_satz_heim_doppel</td><td class='border_l border_b border_o'>$summe_satz_gast_doppel</td><td class='border_l border_b border_o'>$summe_spiele_heim_doppel</td>
                                                                <td class='border_l border_o border_r border_b'>$summe_spiele_gast_doppel</td></tr>");

            echo("<tr style='font-weight:bold;'><td colspan='11'>&nbsp;</td></tr>");

            echo("<tr><td colspan='5' align='right'>Einzel Summe</td><td class='border_l border_b border_o'>$summe_match_heim</td><td class='border_l border_b border_o'>$summe_match_gast</td><td class='border_l border_b border_o'>$summe_satz_heim</td><td class='border_l border_b border_o'>$summe_satz_gast</td><td class='border_l border_b border_o'>$summe_spiele_heim</td>
                                                                <td class='border_l border_o border_r border_b'>$summe_spiele_gast</td></tr>");

            echo("<tr><td colspan='5' align='right'>Doppel Summe</td><td class='border_l border_b '>$summe_match_heim_doppel</td><td class='border_l border_b '>$summe_match_gast_doppel</td><td class='border_l border_b '>$summe_satz_heim_doppel</td><td class='border_l border_b '>$summe_satz_gast_doppel</td><td class='border_l border_b '>$summe_spiele_heim_doppel</td>
                                                                <td class='border_l  border_r border_b'>$summe_spiele_gast_doppel</td></tr>");

            echo("<tr style='font-weight:bold;'><td colspan='5' align='right'><b>Gesamt Summe</b></td><td class='border_l border_b '>".($summe_match_heim_doppel+$summe_match_heim)."</td><td class='border_l border_b '>".($summe_match_gast_doppel+$summe_match_gast)."</td><td class='border_l border_b '>");
            echo(($summe_satz_heim_doppel+$summe_satz_heim)."</td><td class='border_l border_b '>".($summe_satz_gast_doppel+$summe_satz_gast)."</td><td class='border_l border_b '>".($summe_spiele_heim_doppel+$summe_spiele_heim)."</td>
                                                                <td class='border_l  border_r border_b'>".($summe_spiele_gast_doppel+$summe_spiele_gast)."</td></tr>");

            echo("</table></div>");

        }//if($termin!="")
    }//  while($r_spielplan

    if(count($spielplan_arr)>1){
        echo("<br /><div><b style='color:#3F7F23'>Weitere Spielpl�ne:</b><br />");
        $cnt_termin=0;

        $str_spielplan_id_arr = implode(",",$spielplan_id_arr);

        foreach($spielplan_arr as $value_sp){
            $cnt_termin++;
            if($cnt_termin==1){
                $dipl_termin="none";
            }else{
                $dipl_termin="block";
            }
            echo("<span style='display:$dipl_termin' id='link_spielplan_".$spielplan_id_arr[$cnt_termin-1]."'><a href=\"javascript:showTermin(".$spielplan_id_arr[$cnt_termin-1].",'".$str_spielplan_id_arr."')\"> $value_sp</a> &nbsp; &nbsp; &nbsp; </span>");
        }
        echo("</div>");
    }
}



mysql_close();
?>



<br />

<hr class="bigline" style="border:0px;"/>

<br />
<br />


<br />
<br />&nbsp;

