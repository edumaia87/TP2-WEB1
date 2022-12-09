window.addEventListener('load', () => {
    const form = document.querySelector('.edit-book');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('id', form.id.value);
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

        fetch('./processEditBook.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Dados do livro atualizados com sucesso!');
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível atualizar os dados do livro!');
            }
        })
    });
});