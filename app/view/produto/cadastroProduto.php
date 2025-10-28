<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>
     <div class="container mt-3">
            <div class="row">
                
                <div class="col-12 mb-3">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadastroCliente">
                        <i class="fa-solid fa-plus"></i> Cadastro
                    </button>
                </div>

                
                <div class="col-12 mb-3">
                    <div class="form-floating">
                        <input type="search" class="form-control" id="pesquisa" name="pesquisa" placeholder="Digite sua pesquisa">
                        <label for="pesquisa">Pesquisar Empresa</label>
                    </div>
                </div>

                <div class="col-12">
                    <table class="table table-striped table-hover table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome Fantasia</th>
                                <th>Razão Social</th>
                                <th>CNPJ</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js"></script>
</body>

</html>