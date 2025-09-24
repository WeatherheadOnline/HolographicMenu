const idInputs = document.getElementById("id-inputs");
let counter = 1;

let numberOfInputs = prompt("How many input elements are in your form?");

for (let i = 0; i < numberOfInputs; i++) {
    idInputs.innerHTML += `
        <label>Element id:<input type="text" id="id-${counter}" /></label>
        <label>Button text:<input type="text" id="text-${counter}" /></label> 
    `;
}



function addElement(inputNumber) {
    idInputs.innerHTML += `
        <label>Element id:<input type="text" id="id-${inputNumber}" /></label>
        <label>Button text:<input type="text" id="text-${inputNumber}" /></label> 
    `;
}


function oneMoreElement() {
    counter ++;
    addElement(counter);
}