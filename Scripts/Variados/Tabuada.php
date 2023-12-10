<html>

    <div align = "center">

    <h1>TABUADA!</h1>
    <h5>Digite o valor que deseja Multiplicar</h5>

        <form action="Tabuada.php" method="$_POST">			<!-- criar um formulário em HTML passando qual arquivo .php  -->
            <input type="text" name="Num" size="1">			<!-- aqui é criado o campo para insersão do número do tipo texto -->
            <input type="submit" name="Submit" value="OK">	<!-- aqui é criado o botão com o label "valor"  -->
        </form>
    
		<?php
		
			  //ESCOPO GLOBAL: É o contexto aonde ela foi definida

			global $resultado;
			global $contador;
			global $limite;
			global $num;

					function tabuada()	{
						
						
						$num = $_GET['Num'] ?? 0;

						if (empty($_GET['Num'])){ //Se a variável $num não tiver valor nenhum, atribui-se a ela o valor 0
						//	require 'Tabuada.php'; 
							$num = 0; 
						}

						echo "<BR>";
						echo "A tabuada do {$num} é"; 
						echo "<BR>";
						$contador = 0;
						$limite = 10;
						$resultado = 0;
							
							while ($contador <= $limite) {
							$resultado = $num * $contador;
							echo "<br>{$num} X {$contador} é igual à {$resultado} ";
							$contador++;

						}
				}
			echo tabuada();
		
		?>

	</div>
</html>
