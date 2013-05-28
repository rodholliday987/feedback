/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var activar = 0;
function activarMenu() {
    if (activar == 0) {
        $("#menuPrincipal .row ul").addClass("active");
        activar = 1;
    }
    else {
        $("#menuPrincipal .row ul").removeClass("active");
        activar = 0;
    }
}

