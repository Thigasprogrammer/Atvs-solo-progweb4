<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >

    <style>
        body {
            background-color: #f5f5f5ff;
        }

        .login-card {
            width: 100%;
            max-width: 535px;
        }

        .password-container {
            position: relative;
        }

        .password-container .form-control {
            padding-right: 45px;
        }

        .password-eye {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #6c757d;
            font-size: 1.2rem;
        }

        .button {
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>

<body>

    <!-- Centralização da página -->
    <main class="min-vh-100 d-flex justify-content-center align-items-center px-3">

        <!-- Card -->
        <div class="card login-card border-0 shadow-lg rounded-4">

            <div class="card-body p-5">

                <!-- Título -->
                <h1 class="text-center fw-bold fs-2 mb-5">
                    Acessar Conta
                </h1>

                <!-- Formulário -->
                <form>

                    <!-- E-mail -->
                    <div class="mb-3">
                        <input
                            type="email"
                            class="form-control form-control-lg"
                            placeholder="Seu e-mail"
                            required
                        >
                    </div>

                    <!-- Senha -->
                    <div class="mb-3 password-container">
                        <input
                            type="password"
                            class="form-control form-control-lg"
                            placeholder="Sua senha"
                            required
                        >
                        <button 
                            type="button" 
                            class="password-eye"
                            onclick="mostrarSenha()"
                            arial-label="Mostrar senha">
                            
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>

                    <!-- Botão de login -->
                     <div class="d-grid mb-3">
                    <button 
                        type="submit" 
                        class="btn btn-success btn-lg w-100 fw-bold">
                        Entrar
                    </button>
                </div>

                    <!-- Esqueceu a senha -->
                    <div class="text-center">
                        <a href="#" class="text-secondary text-decoration-none">
                            Esqueceu a senha?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        function mostrarSenha() {
         const senhaInput = document.querySelector('.password-container input');
         const senhaEye = document.querySelector('.password-eye i');
            
         if (senhaInput.type === 'password') {
                senhaInput.type = 'text';
                senhaEye.classList.remove('bi-eye');
                senhaEye.classList.add('bi-eye-slash');
            } else {
                senhaInput.type = 'password';
                senhaEye.classList.remove('bi-eye-slash');
                senhaEye.classList.add('bi-eye');
            }
        }
    </script>

</body>
</html>