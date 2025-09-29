/* ~~~ Generate the menu buttons ~~~ */

const inputElements = Array.from(document.getElementsByClassName("holograph-menu"));
const holographButtons = document.getElementById("holograph-buttons");
const holoIcon = document.getElementById("holograph-icon");
const closeHoloMenu = document.getElementById("close-holograph-menu");
const holographMenu = document.getElementById("holograph-menu");

inputElements.forEach(displayInput);

function displayInput(inputField) {
    btnID = inputField.getAttribute("name") + "-holo";
    colorClass = inputField.getAttribute("type") + "-color";
    const borderClass = getBorderColor(inputField);
    holographButtons.innerHTML += `
        <button id=${btnID} class="holomenu-btn ${colorClass} ${borderClass}" onclick="holoEventListener(${inputField.id})">
            ${inputField.getAttribute("data-holomenu")} 
        </button>
   `;
}

function getBorderColor(inputField) {
    let borderClass;
    if (inputField.closest("fieldset") != null && inputField.closest("fieldset").hasAttribute("name")) {
        const thisFieldset = inputField.closest("fieldset");
        borderClass = thisFieldset.name + "-border";
    } else {
        borderClass = "default-border";
    }
    return borderClass;
}

function holoEventListener(inputFieldTarget) {
    if (inputFieldTarget.type === "checkbox") {
        inputFieldTarget.checked = !inputFieldTarget.checked;
        moveKeyboardDown();
    } else if (inputFieldTarget.type === "radio") {
        inputFieldTarget.checked = true;
        moveKeyboardDown();
    } else if (inputFieldTarget.type === "text" || inputFieldTarget.type === "email" || inputFieldTarget.tagName === "TEXTAREA") {
        moveKeyboardUp();
        console.log("text field detected");
    }; 
    inputFieldTarget.focus();
}


function moveKeyboardUp() {
    console.log("hello from inside moveKeyboard()");
    const menuHeight = holographMenu.offsetHeight; // in px
    const viewportHeight = window.visualViewport?.height ?? 0;
    const topAttribute = viewportHeight + window.scrollY - menuHeight; 
    // const topAttribute = 100;
    holographMenu.style.bottom = "unset";
    holographMenu.style.top = `${topAttribute}px`;
}

function moveKeyboardDown() {
    holographMenu.style.top = "unset";
    holographMenu.style.bottom = "1rem";
}


/* ~~~ Add a "close" button to the input menu after all the other buttons are added ~~~*/

setTimeout(() => {
    holographButtons.innerHTML += '<span id="close-holograph-menu center-text" onclick="holoMenuOff()">&times;</span>'
}, 500);

/* ~~~ Toggle the input menu on and off ~~~ */

holoIcon.addEventListener("click", holoMenuOn);

function holoMenuOn() {
    holoIcon.style.display = "none";
    holographButtons.style.display = "flex";
}

function holoMenuOff() {
    holographButtons.style.display = "none";
    holoIcon.style.display = "block";
    moveKeyboardDown();
}


/* Dismiss the "pointer" tooltip */

const pointerDismiss = document.getElementById("pointer-dismiss");
const pointer = document.getElementById("pointer");

pointerDismiss.addEventListener("click", dismissPointer);
holoIcon.addEventListener("click", dismissPointer);

function dismissPointer() {
    pointer.style.display = "none";
    pointerDismiss.removeEventListener("click", dismissPointer);
    holoIcon.removeEventListener("click", dismissPointer);
}
