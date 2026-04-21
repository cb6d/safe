<?php
header('Content-Type: text/html; charset=UTF-8');
$sent = isset($_GET['enviado']) && $_GET['enviado'] === '1';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="description" content="Entre em contato com a equipe do LustraAI — tire dúvidas, envie sugestões ou relate problemas.">
<title>Contato — LustraAI</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/legal.css">
</head>
<body>

<header class="site-header">
  <div class="container nav">
    <a href="index.php" class="logo"><span class="logo-mark">L</span><span>LustraAI</span></a>
    <a href="index.php" class="btn btn-ghost">Voltar</a>
  </div>
</header>

<main class="legal">
  <div class="container">
    <h1>Fale com a gente</h1>
    <p class="updated">Respondemos em até 2 dias úteis</p>

    <p>Tem uma dúvida sobre o LustraAI, uma sugestão para melhorar o produto ou precisa de ajuda com sua conta? Envie sua mensagem pelo formulário abaixo ou diretamente por e-mail.</p>

    <h2>Canais diretos</h2>
    <ul>
      <li><strong>E-mail geral:</strong> <a href="mailto:contato@lustrachat.com">contato@lustrachat.com</a></li>
      <li><strong>Suporte ao usuário:</strong> <a href="mailto:suporte@lustrachat.com">suporte@lustrachat.com</a></li>
      <li><strong>Privacidade / LGPD:</strong> <a href="mailto:privacidade@lustrachat.com">privacidade@lustrachat.com</a></li>
    </ul>

    <?php if ($sent): ?>
      <div class="form-card success-box">
        <h2>Mensagem enviada</h2>
        <p>Obrigado pelo contato! Nossa equipe responde por e-mail em até 2 dias úteis.</p>
      </div>
    <?php else: ?>
      <form class="form-card" method="post" action="contato.php?enviado=1" novalidate>
        <div class="form-row">
          <label for="nome">Seu nome</label>
          <input type="text" id="nome" name="nome" required placeholder="Como podemos te chamar">
        </div>
        <div class="form-row">
          <label for="email">Seu e-mail</label>
          <input type="email" id="email" name="email" required placeholder="voce@email.com">
        </div>
        <div class="form-row">
          <label for="assunto">Assunto</label>
          <input type="text" id="assunto" name="assunto" required placeholder="Ex: dúvida sobre plano gratuito">
        </div>
        <div class="form-row">
          <label for="mensagem">Mensagem</label>
          <textarea id="mensagem" name="mensagem" required placeholder="Escreva sua mensagem com detalhes..."></textarea>
        </div>
        <button type="submit" class="btn-primary">Enviar mensagem</button>
      </form>
    <?php endif; ?>

    <h2>Horário de atendimento</h2>
    <p>Segunda a sexta-feira, das 9h às 18h (horário de Brasília). Mensagens enviadas fora desse período são respondidas no próximo dia útil.</p>
  </div>
</main>

<footer class="site-footer">
  <div class="container">
    <p>&copy; <?= date('Y') ?> LustraAI · <a href="privacidade.php">Privacidade</a> · <a href="termos.php">Termos</a> · <a href="contato.php">Contato</a></p>
  </div>
</footer>

</body>
</html>
