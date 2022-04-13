<html>

    <div align = "center">

    <h1>PAR OU ÍMPAR</h1>
    <h5>Teste lógico para saber se é par ou ímpar</h5>

        <form action="ParOuImpar.php" method="post">                    <!-- criar um formulário em HTML passando qual arquivo .php  -->
            Digite o Número: <input type="text" name="Num" size="1">    <!-- aqui é criado o campo para insersão do número do tipo texto -->
            <input type="submit" name="Submit" value="OK">              <!-- aqui é criado o botão com o label "valor"  -->
        </form>
    </div>


    <div align = "center">
    <?php

        //  $_POST['Num'];
        //  echo $_POST['Num'];

        $num = $_REQUEST['Num'] ?? 0; 

        if($num % 2 == 0){
            echo "O Número {$num} é Par";
        }else {
            echo "O Número {$num} é Ímpar";
        }

    ?>
    </div>

</html>