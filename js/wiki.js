function addField() {
    var form = document.getElementById("fields");
    var input = form.appendChild(document.createElement("textarea"));
    input.type="text";  
    input.name="field"+(form.childElementCount-2);
    input.className="wiki-block";
}
function addImageField() {
    var form = document.getElementById("fields");
    var input = form.appendChild(document.createElement("input"));
    input.type="file";
    input.accept="image/png";  
    input.name="img"+(form.childElementCount-2);
    input.className="wiki-block";
}