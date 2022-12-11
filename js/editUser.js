window.addEventListener('load', () => {
    const form = document.querySelector('.edit-data');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('name', form.name.value);
        data.append('email', form.email.value);
        data.append('password', form.password.value);
        data.append('cpf', form.cpf.value);
        data.append('cellphone', form.cellphone.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processEditUser.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Dados atualizados com sucesso!');
            } else if (json.status == 'sla') { 
                alert('Erro');
            } else {
                alert('Não foi possível realizar a atualização!');
            }
        })
    })
})