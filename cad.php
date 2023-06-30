<?php
include "conexao.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>



    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Criar conta agora</h2>
                            <form action="login2.php" method="post">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" name="nome" for="form3Example1">Nome</label>
                                            <input type="text" id="form3Example1" name="nome" required class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" name="sobrenome" for="form3Example2">Sobrenome</label>
                                            <input type="text" id="form3Example2" name="sobrenome" requided class="form-control" />

                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div class="row">


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" name="celular" for="form3Example3">Celular</label>
                                            <input type="tel" id="form3Example3" name="celular" required class="form-control" />
                                        </div>

                                    </div>


                                    <div class="col-md-6 mt-2">
                                        <div class="form-outline">
                                            <label class="control-label" name="cpf" id="campo">CPF</label>
                                            <input type="text" required class="form-control" name="cpf" maxlength="14" onkeypress="formatar('###.###.###-##', this) ; " onblur="TestaCPF(this.value);" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Password input -->
                                <div class="row">

                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline mb-4">
                                            <label class="form-label" name="email" for="form3Example3">Email</label>
                                            <input type="email" id="form3Example3" name="email" required class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline mb-4">
                                            <label class="form-label" name="senha" for="form3Example4">Senha</label>
                                            <input type="password" id="form3Example4" name="senha" required class="form-control" />
                                        </div>
                                    </div>
                                </div>






                                <button type="submit" class="btn btn-primary btn-block mb-4">
                                    Entrar
                                </button>




                            </form>
                            


                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="tesoura.jpg" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <script>
        function TestaCPF(strCPF) {
            var Soma;
            var Resto;
            Soma = 0;
            if (strCPF == "00000000000") alert( "CPF INVALIDO");

            for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
            Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11)) Resto = 0;
            if (Resto != parseInt(strCPF.substring(9, 10))) alert( "CPF INVÁLIDO");

            Soma = 0;
            for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
            Resto = (Soma * 10) % 11;

            if ((Resto == 10) || (Resto == 11)) Resto = 0;
            if (Resto != parseInt(strCPF.substring(10, 11))) alert( "CPF INVÁLIDO");
            
        }
        
    </script>
</body>

</html>