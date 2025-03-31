const display = document.getElementById("display");

function append(value) {
    display.value += value;
}

function clearDisplay() {
    display.value = "";
}

function toggleSign() {
    if (display.value) {
        if (display.value.startsWith('-')) {
            display.value = display.value.substring(1);
        } else {
            display.value = '-' + display.value;
        }
    }
}

function calculateResult() {
    try {
        // Replace % with /100 for percentage functionality
        let expression = display.value; // ✅ This keeps % as modulo
        let result = eval(expression);
        display.value = result;
    } catch (e) {
        display.value = "Error";
    }
}

function deleteLast() {
    const display = document.getElementById("display");
    display.value = display.value.slice(0, -1);
  }