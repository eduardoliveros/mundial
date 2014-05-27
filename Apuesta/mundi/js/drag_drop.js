
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
