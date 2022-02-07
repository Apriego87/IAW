preguntas = ["<h3>¿Qué mineral está compuesto por la siguiente fórmula química?: (Al, Mg, Mn)₆(BO₃)₃.(OH, F)₄</h3>"]

res1 = ["Basalto", "Granito", "Turmalina", "Amonio"]


function cambiarPregunta() {
    p1 = document.querySelector(".p")
    p1.innerHTML = preguntas[0]
    r1 = document.querySelector(".resp1")
    r1.innerHTML = res1[0]
    r2 = document.querySelector(".resp2")
    r2.innerHTML = res1[1]
    r3 = document.querySelector(".resp3")
    r3.innerHTML = res1[2]
    r4 = document.querySelector(".resp4")
    r4.innerHTML = res1[3]
}