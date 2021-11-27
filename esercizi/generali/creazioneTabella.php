<style>
    td {
        border: 1px solid black;
        padding: 1rem;
    }
</style>

<?php
function creaTabella($righe, $colonne) {
    $body = "";
    $count = 0;
    for ($i=0; $i<$righe; $i++) {
        $tagsColonne = "";
        for ($j=0; $j<$colonne; $j++) {
            $count++;
            $tagsColonne .= "<td>$count</td>";
        }

        $body .= "<tr>$tagsColonne</tr>";
    }

    echo "<table><tbody>$body</tbody></table><br><br>";
}

creaTabella(4, 7);
creaTabella(10, 6);
creaTabella(3000, 3000);