document.addEventListener("DOMContentLoaded", function() {
    const selectContainer = document.querySelector(".select-contain2");
    const selectedOption = selectContainer.querySelector(".sect-opt2");
    const options = selectContainer.querySelectorAll(".opt2");

    options.forEach(option => {
        option.addEventListener("click", function() {
            // Récupère la langue sélectionnée (data-lang)
            const selectedLang = this.getAttribute("data-lang2");
            const selectedFlag = this.querySelector(".flag2").src;
            const selectedAcronym = this.querySelector(".acronym2").textContent;

            // Change l'attribut lang du body
            document.body.setAttribute("lang", selectedLang);

            // Met à jour l'affichage de l'option sélectionnée
            selectedOption.querySelector(".flag2").src = selectedFlag;
            selectedOption.querySelector(".acronym2").textContent = selectedAcronym;
        });
    });
});