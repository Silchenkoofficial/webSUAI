<fieldset>
    <legend>Таблица умножения</legend>
    <table class="multi-field">
        <?php
            $i = 1;
            while($i <= 10) {
                echo '<th style="border: 1px solid yellow; padding: 2px;">' . $i . '</th>';
                $i++;
            }
            $i = 2;
            while ($i <= 10) {
                echo '<tr><th style="border: 1px solid yellow; padding: 2px;">' . $i . '</th>';
                $j = 2;
                while ($j <= 10) {
                    echo '<td style="border: 1px solid yellow; padding: 2px;">' . $i*$j . '</td>';
                    $j++;
                }
                echo '</tr>';
                $i++;
            }
        ?>
    </table>
</fieldset>