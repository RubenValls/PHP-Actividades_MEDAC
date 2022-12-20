function addition(){
    let num1 = parseFloat(document.getElementById('firstNumber').value);
    let num2 = parseFloat(document.getElementById('secondNumber').value);
    let result = add(num1, num2);
    document.getElementById('result').innerHTML = result;
}

function substract(){
    let num1 = parseFloat(document.getElementById('firstNumber').value);
    let num2 = parseFloat(document.getElementById('secondNumber').value);
    let result = subs(num1, num2);
    document.getElementById('result').innerHTML = result;
}

function prime(){
    let num = parseFloat(document.getElementById('number').value);
    let result = isPrime(num);
    result ? result = 'Yes, the number is Prime.' : result = 'No, this number is not Prime.';
    document.getElementById('resultSingle').innerHTML = result;
}

function even(){
    let num = parseFloat(document.getElementById('number').value);
    let result = isEven(num);
    result ? result = 'Yes, the number is Even.' : result = 'No, this number is not Even.';
    document.getElementById('resultSingle').innerHTML = result;
}

function factorial(){
    let num = parseFloat(document.getElementById('number').value);
    let result = fact(num);
    document.getElementById('resultSingle').innerHTML = result;
}


//These functios should be in another JS file
function add(num1, num2) {
    let result = num1 + num2;
    return result;
}

function subs(num1, num2) {
    let result = num1 - num2;
    return result;
}

function isPrime(num) {
    let prime = true;

    if (num > 1) {
        for (let i = 2; i < num; i++) {
            if (num % i == 0) {
                prime = false;
                break;
            }
        }
    }

    return prime;
}

function isEven(num) {
    let even = false;
    if (num % 2 == 0) {
        even = true;
    }
    return even;
}

function fact(num) {
    let result = 1;
    if (num == 0 || num == 1) {
        return result;
    } else {
        for (let i = num; i >= 1; i--) {
            result = result * i;
        }
    }
    return result;
}