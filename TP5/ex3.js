var date = 0
var date = Date.now()
document.getElementById("rouge").addEventListener("click", () => {
        document.body.style.backgroundColor="red";
        date = Date.now();
    });
document.getElementById("vert").addEventListener("click", () => {
    document.body.style.backgroundColor="green";
    date = Date.now();
});

document.getElementById("bleu").addEventListener("click", () => {
    document.body.style.backgroundColor="blue";
    date = Date.now();
});
document.getElementById("jaune").addEventListener("click", () => {
    document.body.style.backgroundColor="lightyellow";
    date = Date.now();
});

document.getElementById("Calculer").addEventListener("click", () => {
    alert("Il y a: "+(Date.now()-date)/1000+" secondes d'écart");
})