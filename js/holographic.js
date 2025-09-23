/* *********************
***   Instructions   ***
************************
(1) HTML: Add the required div (see lines 7-16) as a direct child of the body element.
(2) HTML: Add a class name and a custom property to each input or textarea element you want to include in the input menu. 
  (2a) Add the class name "holographic-menu".
  (2b) Add the custom property 'data-holomenu=""'.
  (2c) Add a value to the custom property. This determines the text the user sees on the matching button in the input menu.
(3) CSS: Add the required properties (see lines 3-29).
(4) JS: Add the JS code (shown below) to your page.

Cheat sheet: 
- To add an input field to the menu: give it the class name "holograph-menu".
- To change how each input's name appears in the menu: change the value of its "data-holomenu" property.
*/


/* ~~~ Generate the menu buttons ~~~ */

const inputElements = Array.from(document.getElementsByClassName("holograph-menu"));
const holographButtons = document.getElementById("holograph-buttons");
const holoIcon = document.getElementById("holograph-icon");
const closeHoloMenu = document.getElementById("close-holograph-menu");

inputElements.forEach(displayInput);

function displayInput(inputField) {
    btnID = inputField.getAttribute("name") + "-holo";
    holographButtons.innerHTML += `
        <button id=${btnID} class="holomenu-btn" onclick="buttonListenerEvent(${inputField.id})">
            ${inputField.getAttribute("data-holomenu")} 
        </button>
   `;
}

function buttonListenerEvent(inputFieldTarget) {
    if (inputFieldTarget.type === "checkbox") {
        inputFieldTarget.checked = !inputFieldTarget.checked;
    } else if (inputFieldTarget.type === "radio") {
        inputFieldTarget.checked = true;
    } else {
        inputFieldTarget.focus();
    }
}


/* ~~~ Add a "close" button to the input menu after all the other buttons are added ~~~*/

setTimeout(() => {
    holographButtons.innerHTML += '<span id="close-holograph-menu center-text" onclick="holoMenuOff()">&times;</span>'
}, 500);


/* ~~~ Toggle the input menu on and off ~~~ */

holoIcon.addEventListener("click", holoMenuOn);

function holoMenuOn() {
    holographButtons.style.display = "flex";
    holoIcon.style.display = "none";
}

function holoMenuOff() {
    holographButtons.style.display = "none";
    holoIcon.style.display = "block";
}