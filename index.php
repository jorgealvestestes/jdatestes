<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de contato</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="comumns in-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Formulario de Contato </h1>
                    <form action="enviar.php" method="POST">
                        <div class="form-group">
                            <label for="exempleINputEmail1">Endereço de email</label>
                            <div class="label">Nome</div>
                            <div class="control">
                                <input name="nome" class="input" type="text" placeholder="Seu nome">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Email *</label>
                            <div class="label">Nome</div>
                            <div class="control">
                                <input name="email" class="input" type="email" placeholder="Seu email">
                            </div>
                        </div>
                       
                        <div class="field">
                            <label class="label">Mensagem *</label>
                            <div class="control">
                                <textatea nome ="mensagem" class = "textarea" placeholder="Deixe 
                                sua mensagem" maxlength="2000"></textarea>
                            </div>
                        </div>   
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link is-medium"
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>  

</body>
</html>