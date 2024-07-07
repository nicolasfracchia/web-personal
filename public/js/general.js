/* ***** TOGGLE CONTENT FUNCTIONS ***** */
const h3s = document.querySelectorAll("h3");

h3s.forEach(h3 => {
    h3.addEventListener("click", () => toggleContent(h3));
});

function toggleContent(element) {
    const section = element.parentElement;
    section.classList.toggle("closed");
}




