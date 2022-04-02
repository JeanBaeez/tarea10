function IrGitHub() {
    window.open('../tarea10/Web/Inicio.php', '_blank');
}

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function () {

    $('.sidenav').sidenav();

});


setTimeout(() => {
    $('#loader').hide();
    $('#Dashboard').show();
}, 4000);



function IrCTC() {
    window.open('../Web/Pages/CTC.php', '_blank');
}
function IrUniversidades() {
    window.open('../Web/Pages/Universidades.php', '_blank');
}
function IrMapa() {
    window.open('../Web/Pages/Mapa.php', '_blank');
}
function IrAcercaDe() {
    window.open('../Web/Pages/AcercaDe.php', '_blank');
}
function IrSugerencias() {
    window.open('../Web/Pages/Sugerencias.php', '_blank');

}
function IrVideos() {
    window.open('../Web/Pages/Videos.php', '_blank');
}
