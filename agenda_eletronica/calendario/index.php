<?php
include_once("conexao.php");
session_start();
$idusuario = $_SESSION["id"];
$result_events = "SELECT id, nome, dt_inicio, dt_fim, status FROM atividade WHERE usuario_id=".$idusuario;
$resultado_events = mysqli_query($conn, $result_events);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset='utf-8' />
			<link href='css/fullcalendar.min.css' rel='stylesheet' />
			<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
			<link href='css/personalizado.css' rel='stylesheet' />
			<script src='js/moment.min.js'></script>
			<script src='js/jquery.min.js'></script>
			<script src='js/fullcalendar.min.js'></script>
			<script src='locale/pt-br.js'></script>
		<script>



			$(document).ready(function() {
				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					defaultDate: Date(),
					navLinks: true, // poder clicar nomes de dia/semanas para navegar nas views
					editable: true,
					eventLimit: true, // permitir "mais" links quando se  tem muitos eventos
					events: [
						<?php
							while($row_events = mysqli_fetch_array($resultado_events)){
								?>
								
								{
								<?php if($row_events['status'] == 'PENDENTE') { ?>	
								id: '<?php echo $row_events['id']; ?>',
								title: '<?php echo $row_events['nome']; ?>',
								start: '<?php echo $row_events['dt_inicio']; ?>',
								end: '<?php echo $row_events['dt_fim'] ?>' ,
								<?php } ?>
								},<?php
							}
						?>
					]
				});
			});
		</script>
	</head>
	<body>

		<div id='calendar'></div>

	</body>
	<div style="display:flex;align-items: center;
  justify-content: center;margin-top:1rem">
	<button class="btn btn-success w-100" type="button" style="background-color:black;border-radius:5px;  " ><a href="../admin/home.php" style="color:#FFF;font-weight:bold;padding-buttom:1rem;text-decoration:none;"
    >Voltar ao sistema!</a> </button>	
	</div>
</html>
