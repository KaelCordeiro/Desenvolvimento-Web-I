<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Jogo do Lançamento de Dados</title>
    </head>
    <body style="background-color: green">
        
    <?php
        
        function JogarDado(){
            
            $dado1Usuario;
            $dado2Usuario;
            $dado1Computador;
            $dado2Computador;
            
            $dado1Usuario = rand(1, 6);
            $dado2Usuario = rand(1, 6);
            $dado1Computador = rand(1, 6);
            $dado2Computador = rand(1, 6);
     
            $resultadoUsuario = $dado1Usuario + $dado2Usuario;
            $resultadoComputador = $dado1Computador + $dado2Computador;
           
            $imagem['1'] = '1.PNG';
            $imagem['2'] = '2.PNG';
            $imagem['3'] = '3.PNG';
            $imagem['4'] = '4.PNG';
            $imagem['5'] = '5.PNG';
            $imagem['6'] = '6.PNG';
	
            $imgUsuario1 = $imagem[$dado1Usuario];
            $imgUsuario2 = $imagem[$dado2Usuario];
            $imgComp1 = $imagem[$dado1Computador];
            $imgComp2 = $imagem[$dado2Computador];
            
            echo "<h3>Usuário Dado 1:";
            echo "<br>";
            echo "<br>";
            echo '<img src="'.$imgUsuario1.'"><br>';
            echo "<br>";
            echo "<br>";
            echo "<h3>Usuário Dado 2:</h3>";
            echo "<br>";
            echo "<br>";
            echo '<img src="'.$imgUsuario2.'"><br>';
            echo "<br>";
            echo "<br>";
            echo "<h3>Computador Dado 1:</h3>";
            echo "<br>";
            echo "<br>";
            echo '<img src="'.$imgComp1.'"><br>';
            echo "<br>";
            echo "<br>";
            echo "<h3>Computador Dado 2:</h3>";
            echo "<br>";
            echo "<br>";
            echo '<img src="'.$imgComp2.'"><br>';
            echo "</body>";
            
            if($resultadoUsuario > $resultadoComputador){
                echo "<h2>Usuário ganhou</h2>";
            }
            else if($resultadoUsuario == $resultadoComputador){
                echo "<h2>Houve um empate<h2>";
            }
            else{
                echo "<h2>Computador ganhou<h2>";
            }
        }          
        JogarDado();
    ?>
    
    </body>
</html> 
