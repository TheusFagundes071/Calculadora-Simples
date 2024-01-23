<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!--Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head> 
<body>
    <div class="container">
        <h1>Calculator</h1>
        <div id="calculator">
            <form action="" method="POST">
                <div id="display">
                    <div id="results">
                        Resultado:
                        <!-- php -->
                        <?php
                        if (isset($_POST['acao'])): /* isset verifica a palavra acao foi adicionada pelo botão*/
                            $n1 =  str_replace(',','.',$_POST['n1']);
                            $n2 = $_POST['n2'];
                            $tipo = $_POST['tipo'];

                            if ($tipo == '+'):
                                $calcular = $n1 + $n2;
                            elseif($tipo == '-'):
                                $calcular = $n1 - $n2;   
                            elseif($tipo == '/'):
                                $calcular = $n1 / $n2; 
                            else:
                                $calcular = $n1 * $n2;
                            endif;
                            echo "$n1 $tipo $n2 igual a $calcular";
                        endif;
                        ?>
                        <!--fim php -->              
                    
                                
                            
                            
                        
                    </div>
                </div>
                <!--TECLADO-->
                <div id="keyboard"> 
                    <div class="row">
                        <div class="col-12">
                            <input type="text" name="n1" class="form-control mb-3" placeholder="Digite um número" required>
                        </div>
                        <div class="col-12">
                            <select name="tipo" class="form-select mb-3 bg-info" required>
                                <option selected>Selecione um operador</option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="text" name="n2" class="form-control mb-3" placeholder="Digite um número" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger" name=acao>=</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

 

<!-- Link script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>