<?php include('layouts/header.php'); ?>  
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card text-center">
        <div class="card-body">
            <?php  
            $data_nascimento = $_POST['data_nascimento'];  
            $signos = simplexml_load_file("signos.xml");  

            $dataNasc = DateTime::createFromFormat('Y-m-d', $data_nascimento);  

            $signoEncontrado = false;

            foreach ($signos->signo as $signo) {  
                $ano = $dataNasc->format('Y');
                $dataInicio = DateTime::createFromFormat('d/m/Y', $signo->dataInicio . '/' . $ano);  
                $dataFim = DateTime::createFromFormat('d/m/Y', $signo->dataFim . '/' . $ano);  

                if ($dataInicio > $dataFim) {
                    $dataFim->modify('+1 year');
                }

                if ($dataNasc >= $dataInicio && $dataNasc <= $dataFim) {  
                    echo "<h2 class='mb-3'>Seu signo é: <strong>{$signo->signoNome}</strong></h2>";  
                    echo "<p>{$signo->descricao}</p>";  
                    $signoEncontrado = true;
                    break;  
                }  
            }

            if (!$signoEncontrado) {
                echo "<h2 class='mb-3'>Desculpe, não conseguimos determinar seu signo.</h2>";
            }
            ?>  
            <a href="index.php" class="btn btn-secondary mt-4">Voltar</a>  
        </div>
    </div>
</div>
