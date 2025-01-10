document.getElementById('fetchButton').addEventListener('click', fetchDogPicture);

async function fetchDogPicture() {
    try {
        const response = await fetch('https://dog.ceo/api/breeds/image/random');
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        const data = await response.json();
        displayDogPicture(data);
    } catch (error) {
        console.error('There has been a problem with your fetch operation:', error);
        displayError(error);
    }
}

function displayDogPicture(data) {
    const dataContainer = document.getElementById('dataContainer');
    dataContainer.innerHTML = `<img src="${data.message}" alt="Random Dog Picture">`;
}

function displayError(error) {
    const dataContainer = document.getElementById('dataContainer');
    dataContainer.innerHTML = `<p style="color: red;">${error.message}</p>`;
}
