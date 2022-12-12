window.addEventListener('load', () => {
    const form = document.querySelector('.add-book');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('title', form.title.value);
        data.append('image', form.image.value);
        data.append('author', form.author.value);
        data.append('description', form.description.value);
        data.append('price', form.price.value);
        data.append('publishedDate', form.publishedDate.value);
        data.append('genre', form.genre.value);
        data.append('isbn', form.isbn.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processAddBook.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Livro salvo com sucesso!');
                window.location.href = 'productsAdmin.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível salvar o livro!');
            }
        })
    });
});