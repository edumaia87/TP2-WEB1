window.addEventListener('load', () => {
    const form = document.querySelector('#checkout');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#checkout-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('');
    })
})