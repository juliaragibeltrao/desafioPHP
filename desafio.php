<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : null;
    $idade = isset($_POST["idade"]) ? $_POST["idade"] : null;
    $cidadeQueMora = isset($_POST["cidade_que_mora"]) ? $_POST["cidade_que_mora"] : null;
    $estadosQueVisitou = isset($_POST["estado"]) ? $_POST["estado"] : null;

    if (isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar'){
        echo "Dados cadastrados:<br>";
        foreach ($_POST as $key => $value) {
            if ($key !== 'estado' && $value !== '') { 
                echo "$key: $value<br>";
            }
        }
        if (!empty($estadosQueVisitou)) { 
            echo "Estados que visitou: ";
            foreach ($estadosQueVisitou as $estado) {
                echo "$estado ";
            }
            echo "<br>";
        }
      }
    ?>

    <form name="cadastro" method="post" action="desafio.php">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" value="<?= $nome ?>"></td>
            </tr>
            <tr>
                <td><label>Idade:</label></td>
                <td><input type="text" name="idade" value="<?= $idade ?>"></td>
            </tr>
            <tr>
                <td><label>Cidade que mora:</label></td>
                <td><input type="text" name="cidade_que_mora" value="<?= $cidadeQueMora ?>"></td>
            </tr>
            <tr>
                <td><label>Estados que visitou:</label></td>
                <td>
                <select name="estado[]" id="estado" multiple>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>