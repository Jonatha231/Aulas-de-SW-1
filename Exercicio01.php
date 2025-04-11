<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>

<body>
    <table border ="1px" cellspacing="0" cellpadding="8">
        <?php
        
        $linhas = 8;
        $colunas = 4;

     
        for ($i = 1; $i <= $linhas; $i++) {
            
            $corFundo = ($i % 2 == 0) ? '#ADD8E6' : '#F08080'; 

            echo "<tr style='background-color: $corFundo'>";
            for ($j = 1; $j <= $colunas; $j++) {
                echo "<td>Linha $i, </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>



