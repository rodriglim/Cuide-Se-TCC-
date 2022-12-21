<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecadastro.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link rel="icon" href="./images/pngwing.com.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>Cadastro Empresa</title>
</head>

<body>

    <div class="form-box">
        <h2>Criar Conta</h2>
        <p> Já é um membro? <a href="index.html"> Login </a> </p>
        <form action="#" id="form">
            <div class="input-group w50">
                <label for="nome"> Nome da empresa</label>
                <input type="text" id="nome" placeholder="Digite o nome da empresa" required>
            </div>

            <div class="input-group w50">
                <label for="email cooporativo">E-mail coorporativo</label>
                <input type="text" id="email coorporativo" placeholder="Digite o seu email" required>
            </div>

            <div class="input-group w50">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" placeholder="Digite o seu telefone" required>
            </div>

            <div class="input-group w50">
                <label for="CNPJ">CNPJ</label>
                <input type="text" id="cnpj" placeholder="Digite o seu CNPJ" required>
            </div>

            <div class="input-group w50">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" onkeypress="return Somentechars(event)" placeholder="Digite a cidade"
                    required>
            </div>


            <div class="input-group w50">
                <label for="cep">Cep</label>
                <input type="text" id="cep" onkeypress="return Somentechars(event)" placeholder="Digite o cep" required>
            </div>

            <div class="input-group w50">
                <label for="rua">Rua</label>
                <input type="text" id="rua" onkeypress="return Somentechars(event)" placeholder="Digite a rua " required>
            </div>

            <div class="input-group w50">
                <label for="bairro">Bairro</label>
                <input type="text" id="Bairro" onkeypress="return Somentechars(event)" placeholder="Digite o bairro"
                    required>
            </div>

            <div class="input-group w50">

                <label for="senha">Senha</label>
                <input type="password" id="senha" placeholder="Digite sua senha" onmousemove="return mostrarSenha()" maxlength=8
                    required>

            </div>

            <div class="input-group w50">
                <label for="Confirmarsenha">Confirmar Senha</label>
                <input type="password" id="Confirmarsenha" placeholder="Confirme a senha" onmousemove="return mostrarConfirmar()"maxlength="8" required>
            </div> 

            <div class="input-group w50 img">
                <label for="imgEstabelecimento">Imagem do Estabelecimento</label>
                <input type="file" id="imgEstabelecimento" required>
            </div>

            <div class="input-group">
                <button>Cadastrar</button>
            </div>

        </form>
    </div>
    </div>
</body>

<script>

    function mostrarSenha() {
        var tipo = document.getElementById("senha");
        if (tipo.type == "password") {
            tipo.type = "text";
        }
        else {
            tipo.type = "password";
        }
        
    }

    function mostrarConfirmar() {
        var tipo = document.getElementById("Confirmarsenha");
        if (tipo.type == "password") {
            tipo.type = "text";
        }
        else {
            tipo.type = "password";
        }
        
    }
    //Função para Formatar CNPJ
    function get_maskCNJP(input_value, event, element, options) {
        // Remove caracteres não numéricos
        var numbers = input_value.replace(/\D+/g, '');
        return "00.000.000/0000-00";
    }

    // Usa a função `get_mask` para definir a máscara
    $('#cnpj').mask(get_maskCNJP, {
        onKeyPress: function (input_value, event, element, options) {
            element.mask(get_maskCNJP, options);
        }
    });

    //Função para Formatar CNPJ
    function get_maskTelefone(input_value, event, element, options) {
        // Remove caracteres não numéricos
        var numbers = input_value.replace(/\D+/g, '');
        return "(00) 00000-0000";
    }

    // Usa a função `get_mask` para definir a máscara
    $('#telefone').mask(get_maskTelefone, {
        onKeyPress: function (input_value, event, element, options) {
            element.mask(get_maskTelefone, options);
        }
    });

    //Função para validar somente caracteres
    function Somentechars(e) {
        var tecla = new Number();
        if (window.event) {
            tecla = e.keyCode;
        }
        else if (e.which) {
            tecla = e.which;
        }
        else {
            return true;
        }
        if ((tecla >= "48") && (tecla <= "57")) {
            return false;
        }
    }

</script>

</html>