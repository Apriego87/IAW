preg = ["<h3>¿Qué mineral está compuesto por la siguiente fórmula química?: (Al, Mg, Mn)₆(BO₃)₃.(OH, F)₄</h3>"]

resp = ["Hübnerita", "Esfalerita", "Turmalina", "Natrolita"]

contador = 0

bien = 0

mal = 0


function cambiarPregunta() {
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

        contador++
    }
    else if (contador == 2) {
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
    }
}