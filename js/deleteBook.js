window.addEventListener('load', () => {
    const form = document.querySelector('.delete-book');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('id', form.id.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processDeleteBook.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Livro deletado com sucesso!');
                window.location.href = 'productsAdmin.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível deletar o livro!');
            }
        })
    });
});