let display = document.getElementById('display');
let firstNumber = '';
let operator = '';
let secondNumber = '';

function appendValue(value) {
    if (value === '+' || value === '-' || value === '×' || value === '÷' || value === '%') {
        if (firstNumber && !operator) {
            operator = value;
            display.value += value;
        }
    } else {
        display.value += value;
        if (!operator) {
            firstNumber += value;
        } else {
            secondNumber += value;
        }
    }
}

function clearDisplay() {
    display.value = '';
    firstNumber = '';
    operator = '';
    secondNumber = '';
}

function calculateResult() {
    let result;
    const num1 = parseFloat(firstNumber.replace(',', '.'));
    let num2 = parseFloat(secondNumber.replace(',', '.'));

    if (isNaN(num1) || isNaN(num2)) {
        display.value = 'Erro';
        return;
    }


    if (operator === '%') {
    
        result = num1 * (num2 / 100);
    } else if (operator === '+') {
        result = num1 + num2;
    } else if (operator === '-') {
        result = num1 - num2;
    } else if (operator === '×') {
        result = num1 * num2;
    } else if (operator === '÷') {
        if (num2 === 0) {
            display.value = 'Erro: Divisão por zero';
            return;
        }
        result = num1 / num2;
    } else {
        display.value = 'Erro';
        return;
    }

    display.value = result.toLocaleString('pt-BR', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 10
    });

    firstNumber = result.toString();
    operator = '';
    secondNumber = '';
}