window.addEventListener('load', () => {
    const form = document.querySelector('.add-publish');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('publisherId', form.publisherId.value);
        data.append('bookId', form.bookId.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processAddPublish.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Publicação adicionada com sucesso!');
            } else if (json.status == 'sla') {
                alert('Erro');
            } else { 
                alert('Não foi possível adicionar a publicação!');
            }
        })
    });
});