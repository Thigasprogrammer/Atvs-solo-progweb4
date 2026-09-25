<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Card Perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background-color: #dfe6eb;
        }

        .perfil-card {
            width: 100%;
            max-width: 465px;
        }

        .avatar {
            width: 160px;
            height: 160px;
            background-color: #e2effa;
        }

        .avatar i {
            font-size: 105px;
            color: #07539b;
        }

        .nome {
            color: #06366b;
        }

        .btn-perfil {
            min-width: 150px;
        }
    </style>

</head>

<body>

    <main class="min-vh-100 d-flex justify-content-center align-items-center p-3">

        <!-- CARD -->
        <div class="card perfil-card border-0 shadow-lg rounded-3">

            <div class="card-body p-3 p-md-4 text-center">

                
                <div class="bg-warning rounded-2 py-3 mb-4">
                    <h5 class="fw-bold mb-0">
                        Conta de Teste
                    </h5>
                </div>

                
                <div
                    class="avatar rounded-circle mx-auto d-flex justify-content-center align-items-center mb-3">

                    <i class="bi bi-person-fill"></i>

                </div>

                
                <h2 class="nome fw-bold mb-2">
                    Ana Silva
                </h2>

                
                <p class="text-secondary fs-5 mb-2">
                    Desenvolvedora Web
                </p>

                
                <p class="fs-5 px-md-4 mb-4">
                    Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                </p>

               
                <div class="d-flex justify-content-center gap-2 flex-wrap">

                    <button
                        class="btn btn-primary btn-lg rounded-pill btn-perfil">
                        Mensagem
                    </button>

                    <button
                        class="btn btn-success btn-lg rounded-pill btn-perfil">
                        Conectar
                    </button>

                </div>

            </div>

        </div>

    </main>

</body>

</html>