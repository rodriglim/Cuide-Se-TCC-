<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecadastro.css">
    <title>Formulario</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.lnr-eye {
    position: absolute;
    top: 5px;
    right: 10px;
    cursor: pointer;
}
body{
    background-image: url(background.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    min-height: 100vh;
}
.w50{
    width: 50%;
    float: left;
    padding-right: 15px;
}
.box{
    display: flex;
    width: 930px;
}
.img-box{
    background-color: rgba(255, 255, 255, 0.5);
    width: 50%;
    display: flex;
    align-items: center;
    padding: 20px;
    border-radius: 20px  0 0 20px;
}
.img-box img{
    width: 100%;
}
.form-box{
    background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    border-radius: 0 20px 20px 0;
}
.form-box h2{
    font-size: 30px;
}
.form-box p{
    font-weight: bold;
    color: #3D3D3D;
}
.form-box p a{
    color: green;
    text-decoration: none;
}
.form-box form{
    margin: 20px 0;
}
form .input-group{
    margin-bottom: 15px;
}
form .input-group label{
    color: #3D3D3D;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}
form .input-group input{
    width: 100%;
    height: 47px;
    background-color: rgba(255, 255, 255, 0.32);
    border-radius: 20px;
    outline: none;
    border: 2px solid transparent;
    padding: 15px;
    font-size: 15px;
    color: #616161;
    transition: all 0.4s ease;
}
form .input-group input:focus{
    border-color: green;
}
form .input-group button{
    width: 100%;
    height: 47px;
    background: green;
    border-radius: 20px;
    outline: none;
    border: none;
    margin-top: 15px;
    color: white;
    cursor: pointer;
    font-size: 16px;
}
@media (max-width:930px) {
    .img-box{
        display: none;
    }
    .box{
        width: 700px;
    }
    .form-box{
        width: 100%;
        border-radius: 20px;
    }
}
@media (max-width:500px) {
    .w50{
        width: 100%;
        padding: 0;
    }
}
</style>

<body>
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p> Já é um membro? <a href="#"> Login </a> </p>
            <form action="#">
                <div class="input-group w50">
                    <label for="nome"> Nome da empresa</label>
                    <input type="text" id="nome" placeholder="Digite o nome da empresa" required>
                </div>

                <div class="input-group w50">
                    <label for="email cooporativo">E-mail coorporativo</label>
                    <input type="email coorporativo" id="email coorporativo" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group w50">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                    <label for="CNPJ">CNPJ</label>
                    <input type="CNPJ" id="CNPJ" placeholder="Digite o seu CNPJ" required>
                </div>

                <div class="input-group w50">
                    <label for="cidade">Cidade</label>
                    <input type="cidade" id="cidade" placeholder="Digite a cidade" required>
                </div>


                <div class="input-group w50">
                    <label for="cep">Cep</label>
                    <input type="cep" id="cep" placeholder="Digite o cep" required>
                </div>

                <div class="input-group w50">
                    <label for="rua">Rua</label>
                    <input type="rua" id="rua" placeholder="Digite a rua " required>
                </div>

                <div class="input-group w50">
                    <label for="bairro">Bairro</label>
                    <input type="bairro" id="Bairro" placeholder="Digite o bairro" required>
                </div>






            

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="Confirmarsenha" placeholder="Confirme a senha" required>
                </div>

                <div class="input-group">
                    <button>Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>