const calcularButton = document.getElementById('calcular');
const valor1 = document.getElementById('valor1');
const valor2 = document.getElementById('valor2');
const resultado = document.getElementById('resultado');
const operacao = document.getElementById('operacao');
function calcular() {
    const v1 = parseFloat(valor1.value);
    const v2 = parseFloat(valor2.value);
    const op = operacao.value.toString();
    console.log(op);
    let total = 0;
    if (op == '+') {
        total = v1 + v2;
    }
    resultado.innerHTML = 'Resultado: ' + total;
    valor1.value = '';
    valor2.value = '';
}
calcularButton.addEventListener('click', calcular);