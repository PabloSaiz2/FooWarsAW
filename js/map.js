
class Pair{
    first = null;
    second = null;
    constructor(first,second){
        this.first = first;
        this.second = second;
    }
}
class State{
    points = null;
    name = null;
    constructor(name,points){
        this.name = name;
        this.points = points;
    }
}
function initializeMap(map){
    console.log("Llamado");
    jQuery.getJSON("data/provinces.json",function (json) {
        console.log("Cargado");
        var canvas = document.getElementById("mapEditor");
        var context = canvas.getContext("2d");
        context.fillStyle = "#6a6a6a"
        json['states'].forEach(element => {
            var name = element['name'];
            var coords = new Array();
            element['coordinates'].forEach(elementCoord => {
                coords.push(new Pair(elementCoord['x'],elementCoord['y']));
                context.fillRect(elementCoord['x'],elementCoord['y'],1,1);
            });
            map.states.push(new State(name,coords));
        }); 
    })
}
class Map{
    states = new Array();
}
var map = new Map();
document.addEventListener("DOMContentLoaded",function(){
    console.log("Cargado el DOM");
    initializeMap(map);
});
