var trescHeader = document.getElementById('dname');
var defaultDogName = trescHeader.textContent.trim();

var dogNameInput = document.getElementById("dogName");

dogNameInput.value = defaultDogName;

document.getElementById("openModalBtn").onclick = function() {
    document.getElementById("myModal1").style.display = "block";
}

document.getElementsByClassName("close1")[0].onclick = function() {
    document.getElementById("myModal1").style.display = "none";
}

function validateField(fieldId, emptyErrorMessage, formatErrorMessage, customValidation) {
    let field = document.getElementById(fieldId);
    let fieldValue = field.value.trim();
    let errorContainer = document.getElementById(fieldId + "Error");

    if (!fieldValue) {
        errorContainer.textContent = emptyErrorMessage;
        return false;
    } else if (customValidation && !customValidation(fieldValue)) {
        errorContainer.textContent = formatErrorMessage;
        return false;
    } else {
        errorContainer.textContent = "";
        return true;
    }
}

function clearErrorMessages() {
    let errorElements = document.querySelectorAll(".error");
    errorElements.forEach(function(el) {
        el.textContent = "";
    });
}

function validateEmail(email) {
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    return /^[0-9]+$/.test(phone);
}

function validateName(name) {
    return /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*$/.test(name);
}

document.getElementById("myForm").onsubmit = function(event) {
    event.preventDefault();

    let hasErrors = false;

    clearErrorMessages();

    if (!validateField("fname", "Imię jest wymagane.", "Imię musi zaczynać się wielką literą.", validateName)) {
        hasErrors = true;
    }
    if (!validateField("lname", "Nazwisko jest wymagane.", "Nazwisko musi zaczynać się wielką literą.", validateName)) {
        hasErrors = true;
    }
    if (!validateField("email", "E-mail jest wymagany.", "E-mail musi być w poprawnym formacie (np. email@example.com).", validateEmail)) {
        hasErrors = true;
    }
    if (!validateField("telefon", "Telefon jest wymagany.", "Telefon musi składać się wyłącznie z cyfr.", validatePhone)) {
        hasErrors = true;
    }
    if (!validateField("haslo", "Hasło jest wymagane.", "")) {
        hasErrors = true;
    }

    let regulamin = document.getElementById("regulamin");
    let regulaminError = document.getElementById("regulaminError");
    if (!regulamin.checked) {
        regulaminError.textContent = "Musisz zaakceptować regulamin.";
        hasErrors = true;
    } else {
        regulaminError.textContent = "";
    }

    if (!hasErrors) {
        var formData = new FormData(event.target);

        var formDataObject = Object.fromEntries(formData);

        var existingForms = JSON.parse(localStorage.getItem("form-data")) || [];

        existingForms.push(formDataObject);

        localStorage.setItem("form-data", JSON.stringify(existingForms));

        document.getElementById("myModal1").style.display = "none";
    }
}

document.getElementById("clearButton").onclick = function(event) {
    event.preventDefault();

    document.getElementById("fname").value = "";
    document.getElementById("lname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("telefon").value = "";
    document.getElementById("haslo").value = "";
    document.getElementById("regulamin").checked = false;

    clearErrorMessages();
}
