function addField() {
    var form = document.getElementById("fields");
    var input = form.appendChild(document.createElement("textarea"));
    input.type="text";  
    input.name="field"+(form.childElementCount-2);
    input.className="wiki-block";
}