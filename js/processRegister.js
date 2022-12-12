window.addEventListener('load', () => {
    const form = document.querySelector('#login-form');
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

        fetch('./processRegister.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Cadastro realizado com sucesso!');
                window.location.href = 'login.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível realizar o cadastro!');
            }
        })
    })
})