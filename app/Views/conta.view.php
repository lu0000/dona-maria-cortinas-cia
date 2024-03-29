<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../estilo.css" rel="stylesheet">
        <title>Cadastro</title>
</head>
<body>

    <header>
        <div class="logo-topo">
            <a href="http://localhost/dona-maria-cortinas-cia/public//index.php"><img src="http://localhost/dona-maria-cortinas-cia/public//imagens/elementos-do-site/logo-dona-maria-1.png"></a>
        </div>
        
        <div class="barra-pesquisa">
            <form action="" method="post">
                <label>
                    <input type="text" id="nome" name="nome" placeholder="O que você procura?" required>
                </label>

                <button><img src="http://localhost/dona-maria-cortinas-cia/public//imagens/elementos-do-site/lupa.png"></button>
            </form>
        </div>

        <div id="menu-topo">
            <ul>
                <li><a href="http://localhost/dona-maria-cortinas-cia/public/login.html"><img src="../imagens/elementos-do-site/entrar.png"></a></li>
                <li><a href="http://localhost/dona-maria-cortinas-cia/public/favoritos.php"><img src="../imagens/elementos-do-site/favoritos.png"></a></li>
                <li><a href="http://localhost/dona-maria-cortinas-cia/public/carrinho.html"><img src="http://localhost/dona-maria-cortinas-cia/public/imagens/elementos-do-site/carrinho.png"></a></li>
            </ul>
        </div>
    </header>

    <main class="cadastro-login"><!--Corpo do Site-->

        <h2 class="cadastrotitulo">Crie sua conta</h2>

        <div class="pagina">
            <div class="formulario_cadastro">
                <form action="cadastro.html" method="post">
                    <label>Nome Completo:
                        <input type="text" id="nome" name="nome" required>
                    </label>
                    <label>CPF:
                        <input type="text" id="cpf" name="cpf" maxLength="11" required>
                    </label>
                    <label>Telefone:
                        <input type="text" id="telefone" name="telefone" maxLength="11" required>
                    </label>
                    <label>E-mail:
                        <input type="email" id="email" name="email" required>
                    </label>
                    <label>Senha:
                        <input type="password" id="senha" name="senha" maxLength="8" required>
                    </label>
                    <label>Confirmar senha:
                        <input type="password" id="senha" name="senha" maxLength="8" required>
                    </label>

                    <button class="butaocalo"> Cadastrar </button>
                </form>
                <p class="cap">Já tem uma conta?  <a class="caa" href="login.html">Faça seu login</a></p>
            </div>
        </div>
    </main>

    <footer><!--Rodapé do Site-->
        <p>© 2023 Dona Maria Cortinas e Cia. Todos os direitos reservados</p>    
    </footer>

</body>

</html>
