document.addEventListener("DOMContentLoaded", function() {
    const selectContainer = document.querySelector(".custom-select-container");
    const selectedOption = selectContainer.querySelector(".selected-option");
    const options = selectContainer.querySelectorAll(".option");

    options.forEach(option => {
        option.addEventListener("click", function() {
            // Récupère la langue sélectionnée (data-lang)
            const selectedLang = this.getAttribute("data-lang");
            const selectedFlag = this.querySelector(".flag").src;
            const selectedAcronym = this.querySelector(".acronym").textContent;

            // Change l'attribut lang du body
            document.body.setAttribute("lang", selectedLang);

            // Met à jour l'affichage de l'option sélectionnée
            selectedOption.querySelector(".flag").src = selectedFlag;
            selectedOption.querySelector(".acronym").textContent = selectedAcronym;
        });
    });
});