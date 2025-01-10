window.onload = function() {
    var modal = document.getElementById("myAdoptionsModal");
    modal.style.display = "block";
};

document.getElementById("submitBtn").onclick = function() {
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();

    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

    emailError.textContent = "";
    passwordError.textContent = "";

    if (!email) {
        emailError.textContent = "E-mail jest wymagany.";
        return;
    }

    if (!validateEmail(email)) {
        emailError.textContent = "E-mail musi być w poprawnym formacie (np. email@example.com).";
        return;
    }

    if (!password) {
        passwordError.textContent = "Hasło jest wymagane.";
        return;
    }

    var formDataJSON = localStorage.getItem("form-data");
    if (formDataJSON) {
        var formDataArray = JSON.parse(formDataJSON);
        var matchedFormData = formDataArray.filter(function(formData) {
            return formData.email === email && formData.haslo === password;
        });

        if (matchedFormData.length > 0) {
            displayAdoptions(matchedFormData);
            document.getElementById("myAdoptionsModal").style.display = "none";
        } else {
            passwordError.textContent = "Nieprawidłowy e-mail lub hasło.";
        }
    } else {
        emailError.textContent = "Brak danych dla podanego e-maila.";
    }
};

function validateEmail(email) {
    let re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function displayAdoptions(formDataArray) {
    var adoptionsInfo = document.getElementById("adoptionsInfo");
    adoptionsInfo.innerHTML = `<h2>Twoje dane adopcyjne:</h2>`;

    formDataArray.forEach(function(formData, index) {
        adoptionsInfo.innerHTML += `
            <div>
                <p>Imię: ${formData.firstname}</p>
                <p>Nazwisko: ${formData.lastname}</p>
                <p>Imię psa: ${formData.dogname}</p>
                <p>E-mail: ${formData.email}</p>
                <p>Telefon: ${formData.telefon}</p>
                <button onclick="deleteAdoption(${index})">Usuń</button> 
                <hr>
            </div>
        `;
    });
}

function deleteAdoption(index) {
    var formDataArray = JSON.parse(localStorage.getItem("form-data")) || [];
    formDataArray.splice(index, 1);
    localStorage.setItem("form-data", JSON.stringify(formDataArray));
    displayAdoptions(formDataArray);
}

