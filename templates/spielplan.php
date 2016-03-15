<div class="wrap">
    <h3>Metadaten</h3>
    <table class="widefat ">
        <thead>
            <tr>
                <td>Termin</td>
                <td>Heimmannschaft</td>
                <td>Gastmannschaft</td>
            </tr>
        </thead>
        <tr>
            <td> <input name="termin" type="date" class="small"/> </td>
            <td> <input name="heim" type="text" placeholder="Heimmannschaft" class="regular-text" /> </td>
            <td> <input name="gast" type="text" placeholder="Gastmannschaft" class="regular-text" /> </td>

        </tr>
    </table>

    <h3>Einzel</h3>
    <table class="widefat">
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
            <td>1.</td>
            <td><input name="heim_spieler1" type="text" placeholder="Spieler 1" class="regular-text" /><br></td>
            <td><input name="gast_spieler1" type="text" placeholder="Spieler 1" class="regular-text" /><br></td>
            <td><input name="" type="number" placeholder="1. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="2. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="3. Satz" class="small" /><br></td>
        </tr>
        <tr>
            <td>2.</td>
            <td><input name="heim_spieler2" type="text" placeholder="Spieler 2" class="regular-text" /><br></td>
            <td><input name="gast_spieler2" type="text" placeholder="Spieler 2" class="regular-text" /><br></td>
            <td><input name="" type="number" placeholder="1. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="2. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="3. Satz" class="small" /><br></td>
        </tr>
        <tr>
            <td>3.</td>
            <td><input name="" type="text" placeholder="Spieler 3" class="regular-text" /><br></td>
            <td><input name="" type="text" placeholder="Spieler 3" class="regular-text" /><br></td>
            <td><input name="" type="number" placeholder="1. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="2. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="3. Satz" class="small" /><br></td>
        </tr>
        <tr>
            <td>4.</td>
            <td><input name="" type="text" placeholder="Spieler 4" class="regular-text" /><br></td>
            <td><input name="" type="text" placeholder="Spieler 4" class="regular-text" /><br></td>
            <td><input name="" type="number" placeholder="1. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="2. Satz" class="small" /><br></td>
            <td><input name="" type="number" placeholder="3. Satz" class="small" /><br></td>
        </tr>
    </table>

    <h2>Doppel</h2>
    <table class="widefat">
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
            <td>1.</td>
            <td>
                <input name="" type="text" placeholder="Spieler 1" class="regular-text" /><br>
                <input name="" type="text" placeholder="Spieler 2" class="regular-text" />
            </td>
            <td><input name="" type="text" placeholder="Spieler 1" class="regular-text" /><br>
                <input name="" type="text" placeholder="Spieler 2" class="regular-text" />
            </td>
            </td>
            <td><input name="" type="number" placeholder="1. Satz" class="small" maxlength="2"/><br></td>
            <td><input name="" type="number" placeholder="2. Satz" class="small" maxlength="2"/><br></td>
            <td><input name="" type="number" placeholder="3. Satz" class="small" maxlength="2"/><br></td>
        </tr>

        <tr>
            <td>2.</td>
            <td>
                <input name="" type="text" placeholder="Spieler 1" class="regular-text" /><br>
                <input name="" type="text" placeholder="Spieler 2" class="regular-text" />
            </td>
            <td><input name="" type="text" placeholder="Spieler 1" class="regular-text" /><br>
                <input name="" type="text" placeholder="Spieler 2" class="regular-text" />
            </td>
            </td>
            <td><input name="" type="number" placeholder="1. Satz" class="small" maxlength="2"/><br></td>
            <td><input name="" type="number" placeholder="2. Satz" class="small" maxlength="2"/><br></td>
            <td><input name="" type="number" placeholder="3. Satz" class="small" maxlength="2"/><br></td>
        </tr>
    </table>
    <br>

    <input class="button-primary" type="submit" name="Example" value="<?php esc_attr_e( 'Spielplan erstellen','tcb' ); ?>" />
</div> <!-- wrap end -->
