const clear = document.getElementById("clearForm");
clear.addEventListener("click", clearForm);

function clearForm() {
    document.getElementById("userName").value = "";
    document.getElementById("returnAddress").value = "";
    document.getElementById("messageSubject").value = "";
    document.getElementById("messageBody").value = "";
}