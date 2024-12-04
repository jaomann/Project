<?php include('layouts/header.php'); ?>  
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card">
        <div class="card-header text-center">
            <h1>Descubra seu Signo</h1>
        </div>
        <div class="card-body">
            <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="form-inline">
                <div class="col-12">
                    <div class="form-group">  
                        <label for="data_nascimento">Data de Nascimento:</label>  
                        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>  
                    </div>  
                </div>
                <div class="mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Consultar Signo</button>  
                </div>
            </form>  
        </div>
    </div>
</div>
