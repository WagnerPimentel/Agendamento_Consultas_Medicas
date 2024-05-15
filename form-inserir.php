<?php include "cabecalho.php"; ?>

<h2>AGENDAR CONSULTA</h2>
<br>
<form method="post" action="salvar.php" enctype="multipart/form-data">
    <input type="text" name="NomePaciente" placeholder="Nome" class="form-control"> <br>
    <input type="text" name="Data" placeholder="Data" class="form-control"> <br>
    <input type="text" name="HoraConsulta" placeholder="Hora da consulta" class="form-control"> <br>
    <input type="radio" name="Medico" value="Pediatra" class="form-check-input"> Pediatra
    <input type="radio" name="Medico" value="Clínico Geral" class="form-check-input"> Clínico Geral
    <input type="radio" name="Medico" value="Psiquiatra" class="form-check-input"> Psiquiatra <br> <br>
    <input type="text" name="MotivoConsulta" placeholder="Motivo da consulta" class="form-control"> <br>
     <br> <br>

    
    <button class="btn btn-primary" type="submit">SALVAR AGENDAMENTO</button>

</form>

<?php include "rodape.php" ?>