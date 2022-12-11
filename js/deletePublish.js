window.addEventListener('load', () => {
    const form = document.querySelector('.delete-publish');
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

        fetch('./processDeletePublish.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Publicação deletada com sucesso!');
                window.location.href = 'publishAdmin.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível deletar a publicação!');
            }
        })
    });
});