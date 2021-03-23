
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
        context.font = "10px Arial";
        json['states'].forEach(element => {
            var name = element['name'];
            var coords = new Array();
            var xSum=0,ySum=0,total=0;
            element['coordinates'].forEach(elementCoord => {
                coords.push(new Pair(elementCoord['x'],elementCoord['y']));
                context.fillStyle = "#6a6a6a";
                context.fillRect(elementCoord['x'],elementCoord['y'],1,1);
                xSum+=elementCoord['x'];
                ySum+=elementCoord['y'];
                ++total;
            });
            xSum = xSum/total-name.length*2.5;
            ySum = ySum/total;
            context.fillStyle = "#000000";
            context.fillText(name,xSum,ySum);
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
