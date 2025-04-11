<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02
    </title>
</head>
<body>
   
    <form method="post">
        <label for="linhas">Número de linhas:</label>
            <input type="number" id="linhas" name="linhas" min="1" required>
             <br><br>
        <label for="colunas">Número de colunas:</label>
            <input type="number" id="colunas" name="colunas" min="1" required>
             <br><br>
        <button type="submit">Gerar Tabela</button>
    </form>


         <table border ="1px" >
    <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $linhas = intval($_POST["linhas"]);
            $colunas = intval($_POST["colunas"]);
         
            echo "<table>";
                
                     $i = 1; 
                while ($i <= $linhas) {
                     echo "<tr>";
                    $j = 1; 
                while ($j <= $colunas) {
                    echo "<td>Linha $i</td>";
                                $j++;
                            }
                            echo "</tr>";
                            $i++;
                        }
                
            echo "</table>";
            }
    ?>     
 </body>
 </html>
            
       
