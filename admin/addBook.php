<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar livro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="add-pub-body">
    <div class="book-card">
        <h2 id="logo"><i class="fas fa-book"></i> Cantinho da Leitura</h2>
        <h3>Cadastro de livro</h3>
        <form class="add-book" method="post" action="">
            <<input type="hidden" name="id">
            <label for="title">Título do livro</label>
            <input name="title" type="text" placeholder="Digite o título do livro">
            <label for="image">Imagem do livro</label>
            <input name="image" type="text" placeholder="Digite o caminho da imagem da capa">
            <label for="author">Autor do livro</label>
            <input name="author" type="text" placeholder="Digite o autor do livro">
            <label for="description">Descrição do livro</label>
            <input name="description" type="text" placeholder="Digite uma descrição para o livro">
            <label for="price">Preço do livro</label>
            <input name="price" type="text" placeholder="Digite o preço do livro">
            <label for="publishedDate">Data de publicação</label>
            <input name="publishedDate" type="text" placeholder="Digite a data de publicação do livro">
            <label for="genre">Gênero do livro</label>
            <select name="genre">
                <option value="">Selecione um gênero:</option>
                <option value="Musical">Musical</option>
                <option value="Mangá">Mangá</option>
                <option value="Programação">Programação</option>
            </select>
            <label for="isbn">ISBN do livro</label>
            <input name="isbn" type="text" placeholder="Digite o ISBN do livro">
            <input type="submit" id="submit-button" value="Adicionar">
            <a href="productsAdmin.php">Voltar para a listagem de livros</a>
        </form>
    </div>
    <script src="../js/addBook.js"></script>
</body>
</html>