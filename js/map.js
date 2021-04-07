
class Pair{
    first = null;
    second = null;
    constructor(first,second){
        this.first = first;
        this.second = second;
    }
}
class State{
    color = "#6a6a6a";
    points = null;
    name = null;
    xCenter=0;
    yCenter=0;
    constructor(name,points,xCenter,yCenter){
        this.name = name;
        this.points = points;
        this.xCenter = xCenter;
        this.yCenter = yCenter;
    }
}
function initializeMap(map){
    jQuery.getJSON("data/provinces.json",function (json) {
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
            map.states.push(new State(name,coords,xSum,ySum));
        }); 
    })
}
class Map{
    states = new Array();
    color = "#6a6a6a";
    paint(x,y){
        //Todavía no hace una búsqueda binaria, pero la hará
        var found = false;
        var i = 0;
        x = Math.round(x);
        y = Math.round(y);
        while(!found&&i<this.states.length){
            var j = 0;
            
            while(!found&&j<this.states[i].points.length){
                if(this.states[i].points[j].first==x&&this.states[i].points[j].second==y){
                    found = true;
                    this.states[i].color = this.color;
                    
                }
                ++j;
            }
            ++i;
        }
    }
}
var map = new Map();
function downloadCanvas() {
    var canvas = document.getElementById("mapEditor");
    var img = canvas.toDataURL();
    document.getElementById("download").setAttribute("href",img);
}

function updateCanvas(map) {
    var canvas = document.getElementById("mapEditor");
    var context = canvas.getContext("2d");
    context.clearRect(0,0,canvas.width,canvas.height);
    map.states.forEach(state => {
        
        context.fillStyle = state.color;
        state.points.forEach(point => {       
            context.fillRect(point.first,point.second,1,1);
        });
        context.fillStyle = "#000000";
        context.font = "10px Arial";
        context.fillText(state.name,state.xCenter,state.yCenter);
    });
    

}
function initializeListeners(map) {
    var canvas = document.getElementById("mapEditor");
    canvas.addEventListener("click",function(evt){
        const rect = canvas.getBoundingClientRect();
        const x = evt.clientX - rect.left;
        const y = evt.clientY - rect.top;
        map.paint(x,y);
        updateCanvas(map);
    });
    var colorPicker = document.getElementById("color");
    colorPicker.addEventListener('change',(event)=>{
        map.color = event.target.value;
    });
    /*
    canvas.addEventListener("contextmenu",function(evt){
        evt.preventDefault();
        const rect = canvas.getBoundingClientRect();
        const x = evt.clientX - rect.left;
        const y = evt.clientY - rect.top;
        game.buildAction(x,y);
        updateCanvas();
    });*/
}
document.addEventListener("DOMContentLoaded",function(){
    initializeMap(map);
    initializeListeners(map);
});
