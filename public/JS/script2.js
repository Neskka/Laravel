// Zmiana wartości pola "dogName" na domyślną nazwę psa z nagłówka
var trescHeader = document.getElementById('dname');
var defaultDogName = trescHeader.textContent.trim();
var dogNameInput = document.getElementById("dogName");
dogNameInput.value = defaultDogName;

// Otwieranie modala
document.getElementById("openModalBtn").onclick = function() {
    document.getElementById("myModal1").style.display = "block";
}

// Zamknięcie modala
document.getElementsByClassName("close1")[0].onclick = function() {
    document.getElementById("myModal1").style.display = "none";
}

// Walidacja pól formularza
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

// Funkcja do czyszczenia komunikatów o błędach
function clearErrorMessages() {
    let errorElements = document.querySelectorAll(".error");
    errorElements.forEach(function(el) {
        el.textContent = "";
    });
}

// Funkcja walidacji imienia (pierwsza litera duża)
function validateName(name) {
    return /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]*$/.test(name);
}

// Funkcja walidacji e-maila
function validateEmail(email) {
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Funkcja walidacji numeru telefonu
function validatePhone(phone) {
    return /^[0-9]+$/.test(phone);
}

// Funkcja walidacji formularza z danymi psa
document.getElementById("addDogForm").onsubmit = function(event) {
    event.preventDefault();

    let hasErrors = false;

    clearErrorMessages(); // Czyszczenie poprzednich błędów

    // Walidacja pól formularza
    if (!validateField("name", "Imię jest wymagane.", "Imię musi zaczynać się wielką literą.", validateName)) {
        hasErrors = true;
    }
    if (!validateField("sex", "Płeć jest wymagana.", null, null)) {
        hasErrors = true;
    }
    if (!validateField("age", "Wiek jest wymagany.", "Wiek musi być liczbą.", null)) {
        hasErrors = true;
    }

    // Walidacja dodatkowych pól formularza
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

    // Walidacja regulaminu
    let regulamin = document.getElementById("regulamin");
    let regulaminError = document.getElementById("regulaminError");
    if (!regulamin.checked) {
        regulaminError.textContent = "Musisz zaakceptować regulamin.";
        hasErrors = true;
    } else {
        regulaminError.textContent = "";
    }

    // Jeśli brak błędów, wyślij formularz
    if (!hasErrors) {
        var formData = new FormData(document.getElementById("addDogForm"));

        fetch("{{ route('dogs.store') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData // Wysłanie formularza z danymi
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Pies został dodany!");
                window.location.href = "/dogs"; // Można zmienić na stronę z listą psów
            } else {
                alert("Błąd podczas zapisywania psa.");
            }
        })
        .catch(error => {
            console.error('Błąd:', error);
            alert("Wystąpił błąd po stronie serwera.");
        });
    }
}

// Funkcja do czyszczenia pól formularza
document.getElementById("clearButton").onclick = function(event) {
    event.preventDefault();

    document.getElementById("fname").value = "";
    document.getElementById("lname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("telefon").value = "";
    document.getElementById("regulamin").checked = false;

    clearErrorMessages();
}
