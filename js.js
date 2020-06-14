// SCROLL MENU
// Denne tilføjer .scroll-up, som i css'en viser navbar__header
// Og skifter den ud med .scroll-down, som skjuler navbar__header
const body = document.body;
const nav = document.querySelector(".navbar__header");
const menu = document.querySelector("#hamburger");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;
 
window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll == 0) {
    body.classList.remove(scrollUp)
    ;
    return;
  }
    
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});


// Funktion til at beregne cykelstørrelse på racercykel udfra skridtlængde
// Skridtlængde = afstand fra sål til skridt
// Derefter divideres med 0.66
function strRacerCykel() {

  let skridtlaengde = document.getElementById("skridtlaengde").value; // Få tal fra input: Skridtlængde

  let racerStr = skridtlaengde * 0.66 // Skridtlængde regnes om til størrelse på racercykel

  document.getElementById("resultat").innerHTML = racerStr.toFixed(1) + "cm.";
}