<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Card Produto</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background-color: #f3f5f6;
        }

        .produto-card {
            width: 100%;
            max-width: 410px;
        }

        .produto-img {
            width: 280px;
            height: 280px;
            object-fit: contain;
        }

        .preco {
            color: #3f9d4c;
        }
    </style>

</head>

<body>

    
    <main class="min-vh-100 d-flex justify-content-center align-items-center p-3">

        <!-- CARD -->
        <div class="card produto-card border shadow-lg rounded-3 overflow-hidden">

            
            <div class="card-body text-center p-4">

                
                <img
                    src="fone.png"
                    class="img-fluid produto-img mb-3"
                    alt="Fone Bluetooth Pro"
                >

                
                <h2 class="fw-bold mb-2">
                    Fone Bluetooth Pro
                </h2>

                
                <h3 class="preco fw-normal mb-3">
                    R$ 199,00
                </h3>

                
                <p class="text-secondary fs-5 mb-0">
                    Alta qualidade de som, cancelamento de
                    ruído. Bateria de longa duração.
                </p>

            </div>

            
            <div class="card-footer bg-light p-4">

                <button class="btn btn-primary btn-lg w-100">
                    Adicionar ao Carrinho
                </button>

            </div>

        </div>

    </main>

</body>

</html>