flatpickr("input[type=datetime-local]", {
    lang: "pl",
    minDate: "today",
    "disable": [
        function (date) {
            return (date.getDay() === 0 || date.getDay() === 6);
        }
    ],
    "locale": {
        "firstDayOfWeek": 1
    }
});

function addCargoInput() {
    const cargoInputs = document.getElementById('cargoInputs');
    const cargoCount = cargoInputs.getElementsByTagName('h3').length + 1;

    const cargoDiv = document.createElement('div');
    cargoDiv.innerHTML = `<h3>Ładunek ${cargoCount}:</h3>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nazwa ładunku</span>
                <input type="text" class="form-control" placeholder="Wpisz nazwę ładunku" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Ciężar ładunku</span>
                <input type="number" class="form-control" placeholder="Wpisz cięzar ładunku w kg" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Typ ładunku</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Wybierz typ ładunku</option>
                    <option value="1">ładunek zwykły</option>
                    <option value="2">ładunek niebezpieczny</option>

                </select>
                </div>
            `;

    cargoInputs.appendChild(cargoDiv);
}