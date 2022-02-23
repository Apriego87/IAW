preg = ["<h3>¿Qué mineral está compuesto por la siguiente fórmula química?: (Al, Mg, Mn)₆(BO₃)₃.(OH, F)₄</h3>"]

resp = ["Hübnerita", "Esfalerita", "Turmalina", "Natrolita"]

contador = 0

bien = 0

mal = 0

function cambiarPregunta(clickedDiv) {
    if (contador == 0) {
        p = document.querySelector(".p")
        p.innerHTML = preg[0]
        r1 = document.querySelector(".resp1")
        r1.innerHTML = resp[0]
        r2 = document.querySelector(".resp2")
        r2.innerHTML = resp[1]
        r3 = document.querySelector(".resp3")
        r3.innerHTML = resp[2]
        r4 = document.querySelector(".resp4")
        r4.innerHTML = resp[3]

        contador++
    }
    else if (contador == 1) {
        divClicao = clickedDiv
        preg = ["<h3>¿En qué continente se encuentra Barbados?</h3>"]
        resp = ["América", "Oceanía", "Asia", "África"]

        p = document.querySelector(".p")
        p.innerHTML = preg[0]

        r1 = document.querySelector(".resp1")
        r1.innerHTML = resp[0]
        r2 = document.querySelector(".resp2")
        r2.innerHTML = resp[1]
        r3 = document.querySelector(".resp3")
        r3.innerHTML = resp[2]
        r4 = document.querySelector(".resp4")
        r4.innerHTML = resp[3]

        if (divClicao.className == 'r3') {
            bien++
            unaBien = document.querySelector(".b")
            unaBien.innerHTML = "<p>Bien: </p>" + bien
        }
        else if (divClicao.className != 'r3') {
            mal++
            unamal = document.querySelector(".m")
            unamal.innerHTML = "<p>Mal: </p>" + mal
        }

        contador++
    }
    else if (contador == 2) {
        divClicao = clickedDiv
        preg = ["<h3>¿Detrás de qué planeta se encuentra el Cinturón de Asteroides de la Vía Láctea?</h3>"]
        resp = ["Saturno", "Marte", "Júpiter", "Mercurio"]

        p = document.querySelector(".p")
        p.innerHTML = preg[0]

        r1 = document.querySelector(".resp1")
        r1.innerHTML = resp[0]
        r2 = document.querySelector(".resp2")
        r2.innerHTML = resp[1]
        r3 = document.querySelector(".resp3")
        r3.innerHTML = resp[2]
        r4 = document.querySelector(".resp4")
        r4.innerHTML = resp[3]

        if (divClicao.className == 'r1') {
            bien++
            unaBien = document.querySelector(".b")
            unaBien.innerHTML = "<p>Bien: </p>" + bien
        }
        else if (divClicao.className != 'r1') {
            mal++
            unamal = document.querySelector(".m")
            unamal.innerHTML = "<p>Mal: </p>" + mal
        }

        contador++
    }
    
    else if (contador == 3) {
        divClicao = clickedDiv

        if (divClicao.className == 'r2') {
            bien++
            unaBien = document.querySelector(".b")
            unaBien.innerHTML = "<p>Bien: </p>" + bien
        }
        else if (divClicao.className != 'r2') {
            mal++
            unamal = document.querySelector(".m")
            unamal.innerHTML = "<p>Mal: </p>" + mal
        }
        final = document.querySelector(".e")
        final.innerHTML = "<h4>Resultado Final --> Bien: " + bien + " |  Mal: " + mal + "</h4>"
    }
}