<html>

    <div align = "center">

    <h1>TABUADA</h1>
    <h5>Digite o valor que deseja Multiplicar</h5>

        <form action="Tabuada.php" method="post">			<!-- criar um formulário em HTML passando qual arquivo .php  -->
            <input type="text" name="Num" size="1">			<!-- aqui é criado o campo para insersão do número do tipo texto -->
            <input type="submit" name="Submit" value="OK">	<!-- aqui é criado o botão com o label "valor"  -->
        </form>
    
		<?php
		
			global $resultado;
			global $contador;
			global $limite;
			global $num;

					function tabuada()	{
						
						$num = $_REQUEST['Num'] ?? 0;
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
