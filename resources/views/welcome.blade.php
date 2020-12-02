<!DOCTYPE html>
<html>
<head>
    <title>Produtos Informáticos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1>Produtos Informáticos</h1>
        <hr />

        <form action="/enviar" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
                <label for="codigo_produto">Código do Produto</label>
                <input type="text" id="codigo_produto" name="codigo_produto" class="form-control" placeholder="Código Produto">
            </div>

            <div class="form-group">
                <label for="nome_produto">Nome do Produto</label>
                <input type="text" id="nome_produto" name="nome_produto" class="form-control" placeholder="Nome Produto">
            </div>
            
            <div class="form-group">
                <label for="categoria">Categoria do Produto</label>
                <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Categoria Produto">
            </div>

            <div class="form-group">
                <label for="preco">Preço do Produto</label>
                <input type="text" id="preco" name="preco" class="form-control" placeholder="Preço Produto">
            </div>

            <div class="form-group">
                <textarea id="descricao" name="descricao" class="form-control" placeholder="Descrição do Produto"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</body>
</html>