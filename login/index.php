<link rel="stylesheet" href="../css/style.css">

<?php

session_start();

#verifica se já está logado
if (isset($_SESSION['email'])){
	#envia para a tela do usuário já logado
	Header("Location: ../index.php");
}


#exibe a mensagem e erro
if (isset($_SESSION['msg'])) {
	print $_SESSION['msg'];
	#deleta da sessao
	unset($_SESSION['msg']);
}

?>



  

<body>
    
</body>
<div class="container">
        <div class="form-image">
            <img src="../undraw_reminder_re_fe15.svg" alt=""></img>
        </div>
        <div class="form">
            <form action="../auth/logar.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    
                </div>
              
                <div class="input-group">
                    <div class="input-box">
                    
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>

                </div>

                <div class="continue-button">
                    <button>Entrar</button>
                </div>
            </form>
        </div>
    </div>
    </body>