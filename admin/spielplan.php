<div class="wrap">
    <h3>Metadaten</h3>
    <form action="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'includes/create_spielplan.php' ?>" method="post">

        <!--Metadaten-->
        <table class="widefat spielplan">
            <thead>
                <tr>
                    <td>Termin</td>
                    <td>Heimmannschaft</td>
                    <td>Gastmannschaft</td>
                </tr>
            </thead>
            <tr>
                <td><input name="termin" type="date" class="all-options"/></td>
                <td><input name="heim" type="text" placeholder="Heimmannschaft" class="all-options autocomplete"/></td>
                <td><input name="gast" type="text" placeholder="Gastmannschaft" class="all-options autocomplete"/></td>
            </tr>
        </table>


        <!--Einzel-->
        <h3>Einzel</h3>
        <table class="widefat spielplan">
            <thead>
                <tr>
                    <td></td>
                    <td>Name, Vorname - Heim</td>
                    <td>Name, Vorname - Gast</td>
                    <td>1. Satz</td>
                    <td>2. Satz</td>
                    <td>3. Satz / Match-Tie-Break</td>
                </tr>
            </thead>
            <tr>
                <td class="bold"> 1.</td>
                <td><input name="einz_heim_spieler1" type="text" placeholder="Spieler 1" class="all-options"/><br></td>
                <td><input name="einz_gast_spieler1" type="text" placeholder="Spieler 1" class="all-options"/><br></td>

                <td>
                    <input name="einz_sp1_satz11" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp1_satz12" type="text" class="small" max="7"/>
                </td>
                <td>
                    <input name="einz_sp1_satz21" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp1_satz22" type="text" class="small" max="7"/>
                </td>
                <td><input name="einz_sp1_satz31" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp1_satz32" type="text" class="small" max="7"/>
                </td>
            </tr>
            <tr class="alternate">
                <td class="bold">2.</td>
                <td><input name="einz_heim_spieler2" type="text" placeholder="Spieler 2" class="all-options"/><br></td>
                <td><input name="einz_gast_spieler2" type="text" placeholder="Spieler 2" class="all-options"/><br></td>

                <td>
                    <input name="einz_sp2_satz11" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp2_satz12" type="text" class="small" max="7"/>
                </td>
                <td>
                    <input name="einz_sp2_satz21" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp2_satz22" type="text" class="small" max="7"/>
                </td>
                <td>
                    <input name="einz_sp2_satz31" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp2_satz32" type="text" class="small" max="7"/>
                </td>
            </tr>
            <tr>
                <td class="bold">3.</td>
                <td><input name="einz_heim_spieler3" type="text" placeholder="Spieler 3" class="all-options"/><br></td>
                <td><input name="einz_gast_spieler3" type="text" placeholder="Spieler 3" class="all-options"/><br></td>

                <td>
                    <input name="einz_sp3_satz11" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp3_satz12" type="text" class="small" max="7"/>
                </td>
                <td>
                    <input name="einz_sp3_satz21" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp3_satz22" type="text" class="small" max="7"/>
                </td>
                <td>
                    <input name="einz_sp3_satz31" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp3_satz32" type="text" class="small" max="7"/>
                </td>
            </tr>
            <tr class="alternate">
                <td>4.</td>
                <td>
                    <input name="einz_heim_spieler4" type="text" placeholder="Spieler 4" class="all-options"/>
                </td>
                <td>
                    <input name="einz_gast_spieler4" type="text" placeholder="Spieler 4" class="all-options"/><br>
                </td>

                <td>
                    <input name="einz_sp4_satz11" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp4_satz12" type="text" class="small" max="7"/>
                </td>
                <td>
                    <input name="einz_sp4_satz21" type="text" class="small" max="7"/><span class="colon">:</span>
                    <input name="einz_sp4_satz22" type="text" class="small" max="7"/>
                    </td>
                <td>
                <input name="einz_sp4_satz31" type="text" class="small" max="7"/><span class="colon">:</span>
                <input name="einz_sp4_satz32" type="text" class="small" max="7"/>
                </td>
            </tr>
        </table>


        <!--Doppel-->
        <h2>Doppel</h2>
        <table class="widefat spielplan">
            <thead>
                <tr>
                    <td></td>
                    <td>Name, Vorname - Heim</td>
                    <td>Name, Vorname - Gast</td>
                    <td>1. Satz</td>
                    <td>2. Satz</td>
                    <td>3. Satz / Match-Tie-Break</td>
                </tr>
            </thead>
            <tr class="alternate">
                <td>1.</td>
                <td>
                    <input name="dop1_heim_spieler1" type="text" placeholder="Spieler 1" class="all-options"/><br>
                    <input name="dop1_heim_spieler2" type="text" placeholder="Spieler 2" class="all-options"/>
                </td>
                <td><input name="dop1_gast_spieler1" type="text" placeholder="Spieler 1" class="all-options"/><br>
                    <input name="dop1_gast_spieler2" type="text" placeholder="Spieler 2" class="all-options"/>
                </td>
                <td>
                    <input name="dop1_satz11" type="text" class="small"/><span class="colon">:</span>
                    <input name="dop1_satz12" type="text" class="small"/>
                </td>
                <td>
                    <input name="dop1_satz21" type="text" class="small"/><span class="colon">:</span>
                    <input name="dop1_satz22" type="text" class="small"/>
                </td>
                <td>
                    <input name="dop1_satz31" type="text" class="small"/><span class="colon">:</span>
                    <input name="dop1_satz32" type="text" class="small"/>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td>
                    <input name="dop2_heim_spieler1" type="text" placeholder="Spieler 1" class="all-options"/><br>
                    <input name="dop2_heim_spieler2" type="text" placeholder="Spieler 2" class="all-options"/>
                </td>
                <td>
                    <input name="dop2_gast_spieler1" type="text" placeholder="Spieler 1" class="all-options"/><br>
                    <input name="dop2_gast_spieler2" type="text" placeholder="Spieler 2" class="all-options"/>
                </td>

                <td>
                    <input name="dop2_satz11" type="text" class="small" /><span class="colon">:</span>
                    <input name="dop2_satz12" type="text" class="small" />
                </td>
                <td>
                    <input name="dop2_satz21" type="text" class="small" /><span class="colon">:</span>
                    <input name="dop2_satz22" type="text" class="small" />
                </td>
                <td>
                    <input name="dop2_satz31" type="text" class="small" /><span class="colon">:</span>
                    <input name="dop2_satz32" type="text" class="small" />
            </tr>
        </table>
        <br>

        <input class="button-primary" type="submit" name="submit"
               value="<?php esc_attr_e('Spielplan erstellen', 'tcb'); ?>"/>
    </form>
</div> <!-- wrap end -->


<?php
/**
 *
 */
?>
<!--<script type="text/javascript">-->
<!--    jQuery(document).on("keydown", ".autocomplete", function() {-->
<!--        jQuery(this).autocomplete({-->
<!--            source: '--><?php // echo plugin_dir_url( __FILE__ ) . "../admin/tcb_get_mannschaft.php"?>
<!--//        });-->
<!--//    });-->
<!--//-->
<!--//</script>-->


