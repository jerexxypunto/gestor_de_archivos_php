const links = document.querySelectorAll(".file");

for (let i = 0; i < links.length; i++) {
  const element = links[i];
  if (element.textContent.includes(".php")) {
    // verfico si el enlace lleva a un archivo.php
    element.classList.replace("d-block", "d-none"); // reemplazo la classe d-block por la classe d-none
  }
}
