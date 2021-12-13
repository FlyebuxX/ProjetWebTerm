function is_checked (nb){
    if (document.getElementById("check" + String(nb)).checked == true) {
        // Afficher le code
        document.getElementById("code-show" + String(nb)).style.display = "block";
    }

    else {
        document.getElementById("code-show" + String(nb)).style.display = "none";
    }
};