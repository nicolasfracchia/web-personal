/* ***** TOGGLE CONTENT FUNCTIONS ***** */
const h2s = document.querySelectorAll("h2");

h2s.forEach(h2 => {
    h2.addEventListener("click", () => toggleContent(h2));
});

function toggleContent(element) {
    const section = element.parentElement;
    section.classList.toggle("closed");
}




