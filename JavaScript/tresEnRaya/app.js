var turno = "o"

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

    if (turno == "x") {
        clickedDiv.imagen = "x"
        clickedDiv.style["background-image"] = "url('x.png')"

        turno = "o"
    } else {
        clickedDiv.imagen = "o"
        clickedDiv.style["background-image"] = "url('o.png')"

        turno = "x"
    }
    comprobar()
}

function comprobar() {
    if (div11.imagen == "o" && div12.imagen == "o" && div13.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div11.imagen == "o" && div21.imagen == "o" && div31.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div21.imagen == "o" && div22.imagen == "o" && div23.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div12.imagen == "o" && div22.imagen == "o" && div32.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div31.imagen == "o" && div32.imagen == "o" && div33.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div13.imagen == "o" && div23.imagen == "o" && div33.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div11.imagen == "o" && div22.imagen == "o" && div33.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    else if (div13.imagen == "o" && div22.imagen == "o" && div31.imagen == "o") {
        window.location.href = "ganaoO.html"
    }
    if (div11.imagen == "x" && div12.imagen == "x" && div13.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div11.imagen == "x" && div21.imagen == "x" && div31.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div21.imagen == "x" && div22.imagen == "x" && div23.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div12.imagen == "x" && div22.imagen == "x" && div32.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div31.imagen == "x" && div32.imagen == "x" && div33.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div13.imagen == "x" && div23.imagen == "x" && div33.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div11.imagen == "x" && div22.imagen == "x" && div33.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
    else if (div13.imagen == "x" && div22.imagen == "x" && div31.imagen == "x") {
        window.location.href = "ganaoX.html"
    }
}