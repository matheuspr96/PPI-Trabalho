<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="theme-color" content="#4CAF50">
	<title>Clínica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:400|700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/index.css">
</head>

<body>
	<!-- Barra do topo -->
	<nav class="barra-topo">
		<ul class="barra-topo__lista">
			<li class="barra-topo__item barra-topo__item_nome" onclick="#">Zika-PET</li>
			<li class="barra-topo__item barra-topo__item_botao">
				<button class="barra-topo__botao botao mostra-login">Login</button>
			</li>
			<li data-mostra="home" class="barra-topo__item barra-topo__item_clicavel barra-topo__item_selecionado">
				Home
			</li>
			<li data-mostra="galeria" class="barra-topo__item barra-topo__item_clicavel">
				Galeria
			</li>
			<li data-mostra="contato" class="barra-topo__item barra-topo__item_clicavel">
				Contato
			</li>
			<li data-mostra="agendamento" class="barra-topo__item barra-topo__item_clicavel">
				Agendamento
			</li>
			<li id="abre-menu" class="barra-topo__item barra-topo__item_clicavel barra-topo__item_mobile">
				<span class="fa fa-bars"></span>
			</li>
		</ul>
	</nav>

	<main class="pagina">
		<!-- Header -->
		<header class="header">
			<h1 class="header__titulo">Clínica</h1>
		</header>

		<!-- Paginas -->
		<!-- Home -->
		<article class="cartao cartao_pag_home cartao_visivel">
			<h2 class="cartao__titulo">Home</h2>

			<img src="./images/Zika.png" alt="Zika-PET" class="logo-home">
			<span class="texto-maior">O Zika-Pet</span>
			<p>vem inovando na cidade de uberlândia com seus conceitos
				sofisticado, oferecendo um espaço agradável combinado com a melhor equipe de veterinarios oferecendo
				um serviço de qualidade e eficiência.</p>
			<span class="texto-grande">Seu animal merece!</span>
			<span class="fa fa-paw"></span>

			<h2 class="cartao__titulo">
				<span class="fa fa-heartbeat"></span>
				Quem somos
			</h2>
			<h3 class="cartao__subtitulo">Missão</h3>
			<p class="cartao__item">Levar a população um atendimento de qualidade e com boa infraestrutura.</p>


			<h3 class="cartao__subtitulo">Valores</h3>
			<ul class="cartao__item">
				<li>Qualidade</li>
				<li>Compromisso</li>
				<li>Atenção</li>
				<li>Amor pelo que faz</li>
			</ul>

			<h3 class="cartao__subtitulo">Visão</h3>
			<p class="cartao__item">Ser reconhecida como clinica inovadora no cenário nacional.</p>

		</article>

		<article class="cartao cartao_pag_galeria">
			<h2 class="cartao__titulo">Galeria</h2>
			<div id="imagens"></div>
			<iframe
					class="video"
					src="https://www.youtube.com/embed/bykaW0rEGsY"
					allow="autoplay; encrypted-media"
					allowfullscreen>
			</iframe>
		</article>

		<article class="cartao cartao_pag_contato">
			<h2 class="cartao__titulo">Contato</h2>
			<form target="" action="" method="POST" class="form" id="formCadastroContato">
				<label for="contato__nome" class="form__label">Nome</label><br>
					<input type="text" name="contato__nome" id="contato__nome" class="form__text-field"><br><br>

				<label for="contato__email" class="form__label">Email</label><br>
					<input type="email" name="contato__email" id="contato__email" class="form__text-field"><br><br>

				<label class="form__label">Motivo</label><br>
					<input type="radio" name="contato__motivo" value="reclamacao" class="form__checkbox">
				<label for="reclamacao" class="form__cb-label">Reclamação</label><br>
					<input type="radio" name="contato__motivo" value="sugestao" class="form__checkbox">
				<label for="sugestao" class="form__cb-label">Sugestão</label><br>
					<input type="radio" name="contato__motivo" value="elogio" class="form__checkbox">
				<label for="elogio" class="form__cb-label">Elogio</label><br>
					<input type="radio" name="contato__motivo" value="duvida" class="form__checkbox">
				<label for="duvida" class="form__cb-label">Dúvida</label><br><br>

				<label for="contato__mensagem" class="form__label">Mensagem</label><br>
				<textarea name="contato__mensagem" id="contato__mensagem" cols="50" rows="5" class="form__text-field"></textarea><br><br>

				<button type="button" id ="btnCadastraContato" onclick="sendFormContato();" class="form__botao botao">Enviar</button>

			</form>

			<div class="mensagemSucesso" id="divSuccessMsg">
    			<strong>Cadastro realizado com sucesso: </strong><span id="successMsg"></span>
  			</div>

  			<div class="mensagemErro" id="divErrorMsg">
    			<strong>A operação não pode ser realizada: </strong><span id="errorMsg"></span>
  			</div>

		</article>

		<article class="cartao cartao_pag_agendamento">
			<h1 class="cartao__titulo">Agendamento</h1><br>
			<form  id = "formCadastroAgendamento" class="form">
				<label class="form__label">Especialidade</label><br>
				<select class="form__select" name="agendamento__especialidade" id="agendamento__especialidade" onchange="buscaMedico(this);">
					<option value="null">Selecione uma especialidade</option>
					<option value="Neurologista">Neurologista</option>
                    <option value="Oftamologista">Oftamologista</option>
                    <option value="Cirurgiao">Cirurgião</option>
                    <option value="Veterinariogeral">Veterinário geral</option>
                    <option value="Enfermeiro">Enfermeiro</option>
				</select><br><br>
			
				<label class="form__label">Médico</label><br>
				<select class="form__select" name="agendamento__medico" id="agendamento__medico">
				<!-- dynamic -->
				</select><br><br>

				<label for="consulta" class="form__label">Data consulta</label><br>
				<input type="date" name="agendamento__consulta" id="agendamento__consulta" class="form__text-field"  onchange="buscaHorario();"><br><br>

				<label class="form__label">Horário</label><br>
				<select class="form__select" name="agendamento__horario" id="agendamento__horario">
				<!-- dynamic -->
				</select><br><br>

				<label for="agendamento__nome" class="form__label">Nome</label><br>
				<input type="text" name="agendamento__nome" id="agendamento__nome" class="form__text-field"><br><br>

				<label for="agendamento__telefone" class="form__label">Telefone</label><br>
				<input type="text" name="agendamento__telefone" id="agendamento__telefone" class="form__text-field"><br><br>

				<button type="button" id="btnCadastraAgendamento" onclick="sendFormAgendamento();" class="form__botao botao">Agendar</button>

			</form>

			<div class="mensagemSucesso" id="divSuccessMsgAg">
    			<strong>Cadastro realizado com sucesso</strong><span id="successMsg"></span>
  			</div>

  			<div class="mensagemErro" id="divErrorMsgAg">
    			<strong>A operação não pode ser realizada</strong><span id="errorMsgAg"></span>
  			</div>

		</article>

		<img class="imagem-footer" src="images/799365.jpg">
		<footer class="footer"></footer>
	</main>

	<aside id="login-dialog" class="dialog dialog_escondido">
		<div class="dialog__fundo"></div>
		<div class="dialog__cartao cartao">
			<h3 class="cartao__titulo">Login</h3>
			<form action="./php/login.php" method="POST" class="form">
				<label for="login__login" class="form__label">Login</label><br>
				<input type="text" name="login__login" id="login__login" class="form__text-field"><br><br>

				<label for="login__senha" class="form__label">Senha</label><br>
				<input type="password" name="login__senha" id="login__senha" class="form__text-field"><br><br>

				<button id = "botao-login" class="form__botao botao">Entrar</button>
			</form>
		</div>
	</aside>

	<aside class="menu menu_escondido">
		<div class="menu__fundo"></div>
		<div class="menu__superficie">
			<ul class="menu__lista">
				<li data-mostra="home" class="menu__item">Home</li>
				<li data-mostra="galeria" class="menu__item">Galeria</li>
				<li data-mostra="contato" class="menu__item">Contato</li>
				<li data-mostra="agendamento" class="menu__item">Agendamento</li>
				<li class="menu__item mostra-login">Login</li>
			</ul>
			<span class="menu__fechar fa fa-close"></span>
		</div>
	</aside>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="scripts/index.js"></script>
</body>

</html>