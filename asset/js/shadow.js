const input = document.querySelectorAll(".champ");
const para = document.querySelector(".para");

input.forEach((entrer) => {
  entrer.addEventListener("input", (e) => {
    var valeur = e.target.value;
    if (valeur.trim() !== "") {
      entrer.classList.add("shadowP");
    }
  });
});
