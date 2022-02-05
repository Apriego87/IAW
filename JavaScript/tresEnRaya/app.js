var turno = "circulo"

var div11 = document.querySelector(".x1y1")
var div12 = document.querySelector(".x1y2")
var div13 = document.querySelector(".x1y3")
var div21 = document.querySelector(".x2y1")
var div22 = document.querySelector(".x2y2")
var div23 = document.querySelector(".x2y3")
var div31 = document.querySelector(".x3y1")
var div32 = document.querySelector(".x3y2")
var div33 = document.querySelector(".x3y3")

function hacerClick(clickedDiv) {

    if (turno == "cruz") {
        clickedDiv.imagen = "cruz"
        clickedDiv.style["background-image"] = "url('equis.png')"

        turno = "circulo"
    } else {
        clickedDiv.imagen = "circulo"
        clickedDiv.style["background-image"] = "url('o.jpg')"

        turno = "cruz"
    }

    comprobar()
}

function comprobar() {
    if (div11.imagen == "cruz" && div12.imagen == "cruz" && div13.imagen == "cruz") {
        document.write("WIN")
    }
}