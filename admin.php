<?php
include "cabecalho.php";
include "conexao.php";

$id = "id";
$NomePaciente = "NomePaciente";
$Data = "Data";
$HoraConsulta = "HoraConsulta";
$Medico = "Medico";
$MotivoConsulta = "MotivoConsulta";


?>


<h2>Ambiente Administrativo</h2>

<table class="table mt-3 table-primary">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Médico</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "select * from tb_agendamento";
        $resultado = mysqli_query($conexao, $sql);
        while($umPaciente = mysqli_fetch_assoc($resultado)):
        ?>
            <tr>
                <td><?=$umPaciente['NomePaciente'];?></td>
                <td><?=$umPaciente['Data'];?></td>
                <td><?=$umPaciente['HoraConsulta'];?></td>
                <td><?=$umPaciente['Medico'];?></td>
                <td>
                    <a href="excluir.php?id=<?=$umPaciente['id'];?>">Excluir</a> / 
                    <a href="diagnostico.php?id=<?=$umPaciente['id'];?>">Diagnóstico</a>
                </td>
            </tr>
        <?php endwhile; 
        mysqli_close($conexao);
        ?>
    </tbody>
</table>

<?php
include "rodape.php"
?>