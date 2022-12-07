window.addEventListener('load', () => {
    const loginForm = document.querySelector('#login-form');

    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#login-button').addEventListener('click', () => {
        const data = new FormData(loginForm);
        data.append('email', loginForm.email.value);
        data.append('password', loginForm.password.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processLogin.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            let message = document.querySelector('#message');
            if (json.status == 'ok' && json.type == 'admin') {
                window.location.href = '../admin/headerAdmin.php';
            } else if (json.status == 'ok' && json.type == 'user') {
                window.location.href = 'home.php';
            } else if (json.status == 'erro') {
                message.innerHTML = `<div>` + json.message + `</div>`;
                message.removeAttribute('class');
                message.classList.add('hidden-message');
            } else if (json.status == 'aviso') {
                message.innerHTML = `<div>` + json.message + `</div>`;
                message.removeAttribute('class');
                message.classList.add('hidden-message');
            }

        })
    })
});