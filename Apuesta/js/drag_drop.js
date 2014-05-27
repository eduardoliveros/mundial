
function allowDrop(ev)
{
ev.preventDefault();
}

function drag(ev)
{
 ev.dataTransfer.setData("cuadro",document.getElementById(ev.target.id).parentNode.id);   
ev.dataTransfer.setData("bandera",ev.target.id);
}

function drop(elemento)
{
var data=elemento.dataTransfer.getData("bandera");
var cuadro=elemento.dataTransfer.getData("cuadro");
  
  
elemento.preventDefault();
elemento.target.appendChild(document.getElementById(data));
}
function tomarApuesta(){
//    dragGA1
var equipo=new Array();
var grabo;
for(var i=0;i<=15;i++){
    if(document.getElementById('drag'+(i+1)).firstChild.nextElementSibling==null){
    alert('Por favor realice todas sus apuestas');
    grabo=false;
    break;
    }else{
            equipo[i]=document.getElementById('drag'+(i+1)).firstChild.nextElementSibling.id;
            grabo=true;
    }
}
if(grabo){
    document.getElementById('mensajeApuesta').hidden=false;
    $.ajax({
      url: "/logica/grabarApuesta",
      type: "POST",
      data: { apuesta:equipo },
      success:
              alert('success'),
      failure:
              alert('failure'),
      error:
              alert('error'),
      
    });
}
}
function Salir(){
    document.getElementById('mensajeApuesta').hidden=true;
}