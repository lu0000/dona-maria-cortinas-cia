<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../estilo.css" rel="stylesheet">
        <title>Login</title>
</head>
<body>

    <header>
        <div class="logo-topo">
            <a href="../index.php"><img src="../imagens/elementos-do-site/logo-dona-maria-1.png"></a>
        </div>
        
        <div class="barra-pesquisa">
            <form action="" method="post">
                <label>
                    <input type="text" id="nome" name="nome" placeholder="O que você procura?" required>
                </label>

                <button><img src="../imagens/elementos-do-site/lupa.png"></button>
            </form>
        </div>

        <div id="menu-topo">
            <ul>
                <li><a href="login.html"><img src="../imagens/elementos-do-site/entrar.png"></a></li>
                <li><a href="favoritos.php"><img src="../imagens/elementos-do-site/favoritos.png"></a></li>
                <li><a href="carrinho.html"><img src="../imagens/elementos-do-site/carrinho.png"></a></li>
            </ul>
        </div>
    </header>

    <main class="cadastro-login"><!--Corpo do Site-->

        <h2 class="cadastrotitulo">Login</h2>

        <div class="pagina">
            <div class="formulario_login">
                <form action="cadastro.html" method="post">
                    <label>E-mail:
                        <input type="email" id="email" name="email" required>
                    </label>
                    <label>Senha:
                        <input type="password" id="senha" name="senha" required>
                    </label>

                    <button class="butaocalo"> Entrar </button>
                </form>
                <p class="cap">Não tem uma conta?  <a class="caa" href="cadastro.html">Cadastre-se</a></p>
            </div>
        </div>
    </main>

    <footer><!--Rodapé do Site-->
        <p>© 2023 Dona Maria Cortinas e Cia. Todos os direitos reservados</p>    
    </footer>

</body>

</html>
