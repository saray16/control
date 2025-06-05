const boton = document.getElementById("boton-crear-usuario");
const formulario = document.getElementById("formulario");

boton.addEventListener("click", () => {
    formulario.style.display = formulario.style.display === "none" || formulario.style.display === "" ? "block" : "none";
});
