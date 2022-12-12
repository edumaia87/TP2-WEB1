function cpfMask() {
    const input = document.querySelector('#cpf');

    input.addEventListener('keypress', () => {
        let inputLength = input.value.length;

        if (inputLength === 3 || inputLength === 7) {
            input.value += '.';
        } else if (inputLength === 11) {
            input.value += '-';
        }
    })
}

function cnpjMask() {
    const cnpj = document.querySelector('#cnpj');

    cnpj.addEventListener('keypress', () => {
        let cnpjLength = cnpj.value.length;

        if (cnpjLength === 2 || cnpjLength === 6) {
            cnpj.value += '.';
        } else if (cnpjLength === 10) {
            cnpj.value += '/';
        } else if (cnpjLength === 15) {
            cnpj.value += '-';
        }
    })
}

/*function cellphoneMask() {
    const cellphone = document.querySelector('#cellphone');
    
    cellphone.addEventListener('keypress', () => {
        let cellLength = cellphone.value.length;

        if (cellLength === 0) {
            cellphone.value += '(';
        } else if (cellLength === 2) {
            cellphone.value += ')';
        } else if (cellLength === 8) {
            cellphone.value += '-';
        }
    })
}*/