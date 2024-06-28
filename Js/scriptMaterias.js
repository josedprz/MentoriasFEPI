document.addEventListener('DOMContentLoaded', () => {
        fetch('materias.json')
            .then(response => response.json())
            .then(data => {
                const carrerasMaterias = data;
                const carreraSelect = document.getElementById('carrera');
                const semestreSelect = document.getElementById('semestre');
                const materiasSelect = document.getElementById('materias');

                // Populate Carrera options
                for (let carrera in carrerasMaterias) {
                    let option = document.createElement('option');
                    option.value = carrera;
                    option.text = carrera;
                    carreraSelect.appendChild(option);
                }

                // Handle Carrera change
                carreraSelect.addEventListener('change', () => {
                    semestreSelect.innerHTML = ''; // Clear semestre options
                    materiasSelect.innerHTML = ''; // Clear materias options

                    const selectedCarrera = carreraSelect.value;
                    const semestres = Object.keys(carrerasMaterias[selectedCarrera]);

                    for (let semestre of semestres) {
                        let option = document.createElement('option');
                        option.value = semestre;
                        option.text = semestre;
                        semestreSelect.appendChild(option);
                    }
                });

                // Handle Semestre change
                semestreSelect.addEventListener('change', () => {
                    materiasSelect.innerHTML = ''; // Clear materias options

                    const selectedCarrera = carreraSelect.value;
                    const selectedSemestre = semestreSelect.value;
                    const materias = carrerasMaterias[selectedCarrera][selectedSemestre];

                    for (let materia of materias) {
                        let option = document.createElement('option');
                        option.value = materia;
                        option.text = materia;
                        materiasSelect.appendChild(option);
                    }
                });

                // Trigger initial change to populate semestre options
                carreraSelect.dispatchEvent(new Event('change'));
            });
        });
