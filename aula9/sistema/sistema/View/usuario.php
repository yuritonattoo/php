<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
</head>
<body>
<div class="container">
    <?php include "../includes/menu.php"; ?>

    <?php
    require_once "../../vendor/autoload.php";

    $usuario = new Usuario();
    $conexao = new Conexao();
    $objfn = new Funcoes();

    session_start();

    if($_SESSION["logado"] == "logar")
    {
        $usuario->verificaUsuario($_SESSION["func"]);
    }
    else
    {
        header("Location:logar.php");
    }

    if (isset($_POST['enviar'])) {

        if ($usuario->inserirUsuario($_POST) == "ok") {
            echo "<html> <div class='alert alert-primary alert-dismissible fade show' role='alert'> Cadastrado com Sucesso <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div></html>";
        }
    }
    if (isset($_POST['editar'])) {

        if ($usuario->editarUsuario($_POST) == "ok") {
            echo header("Location:usuario.php");
        }
    }

    if (isset($_GET['acao'])) {

        switch ($_GET['acao']) {

            case "edit":
                $func = $usuario->selecionaIdentificador($_GET['func']);
                break;
            case "delet":
                if ($usuario->deletarUsuario($_GET['func']) == "ok") {
                    echo "Deletado com Sucesso";
                    header("Location:usuario.php");
                } else {
                    echo "Não Deletou";
                }
                break;
        }
    }
    ?>

    <h1>Cadastro Usuário</h1>
    <form method="post" action="" id="cadastroForm">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome do Usuário:</label>
            <input type="text" name="nome" class="form-control" id="nome"
                   value="<?=(isset($func["nome"]) ?  ($func["nome"]) : ("") )   ?>"
                   placeholder="Nome do Usuário">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email do Usuário:</label>
            <input type="text" name="email" class="form-control"
                   value="<?=  (isset($func["email"]) ?  ($func["email"]) : ("")  )   ?>"
                   placeholder="Email do Usuário">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Senha do Usuário:</label>
            <input type="password" name="senha" class="form-control"
                   value="<?=  (isset($func["senha"]) ? ($func["senha"]) : ("")  )   ?>"
                   placeholder="Senha do Usuário">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Nível do Usuário:</label>
            <select class="form-control" name="tipo" id="tipo">
                <option value="1">Usuário Padrão</option>
                <option value="2">Usuário Admin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem:</label>
            <textarea class="form-control" name="mensagem" rows="3">   <?php echo (isset($func["mensagem"]) ? ($func["mensagem"]) : ('')   ); ?> </textarea>
        </div>

        <input type="submit" onclick="confirmarCadastro()" class="btn btn-primary"
               name="<?= (isset($_GET["acao"]) == "edit" ? ("editar") : ("enviar") )  ?>"
               value="<?= (isset($_GET["acao"]) == "edit" ? ("Alterar") : ("Cadastrar") )  ?>">
        <input type="hidden" name="func"
               value="<?=  (isset($func["id"]) ? $objfn->base64($func["id"], 1) : " " )  ?>">

    </form>

    <div style="overflow-x: auto">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Tipo</th>
                <th scope="col">Observação</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
            </thead>
            <tbody>
            <?php
$paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
$paginaAtual = empty($paginaAtual) ? 1 : $paginaAtual;

echo "Debug: Página Atual antes de obterUsuariosPaginados: $paginaAtual<br>";


try {
    $totalUsuarios = $usuario->contarTotalUsuarios();
    $totalPaginas = ceil($totalUsuarios / Usuario::REGISTROS_POR_PAGINA);

    echo "Debug: Total de usuários no banco: " . $totalUsuarios . "<br>";
    echo "Debug: Total de páginas: " . $totalPaginas . "<br>";

    $usuarios = $usuario->obterUsuariosPaginados($paginaAtual);

    echo "Debug: Total de usuários na página: " . count($usuarios) . "<br>";
?>

        <?php foreach ($usuarios as $resultado): ?>
            <tr>
                <th scope="row"><?php echo $resultado['id']; ?></th>
                <td><?php echo $resultado['nome']; ?></td>
                <td><?php echo $resultado['email']; ?></td>
                <td><?php echo $resultado['senha']; ?></td>
                <td><?php echo $resultado['nivel']; ?></td>
                <td><?php echo $resultado['mensagem']; ?></td>
                <td><a class="btn btn-info" href="?acao=edit&func=<?= $objfn->base64($resultado["id"], 1) ?>">Editar</a></td>
                <td><a class="btn btn-danger" href="?acao=delet&func=<?= $objfn->base64($resultado["id"], 1) ?>">Deletar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<tr>
    <td colspan="8">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php echo ($paginaAtual == 1) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?pagina=<?php echo $paginaAtual - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for ($pagina = 1; $pagina <= $totalPaginas; $pagina++): ?>
                    <li class="page-item <?php echo ($pagina == $paginaAtual) ? 'active' : ''; ?>">
                        <a class="page-link" href="?pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php echo ($paginaAtual == $totalPaginas) ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?pagina=<?php echo $paginaAtual + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </td>
</tr>

<?php
} catch (Exception $e) {
    echo 'Erro ao obter usuários paginados: ' . $e->getMessage();
}
?>


            </tbody>
        </table>
    </div>

    <?php include "../includes/rodape.php"; ?>
</div>

<script>
    // Função para exibir confirmação antes de cadastrar
    function confirmarCadastro() {
        var confirmacao = confirm("Deseja realmente cadastrar?");
        if (confirmacao) {
            document.getElementById('cadastroForm').submit();
        } else {
            // O usuário escolheu não cadastrar, você pode adicionar ações adicionais aqui se necessário.
            alert('Cadastro cancelado.');
        }
    }
</script>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
