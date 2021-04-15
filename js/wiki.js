function addField() {
    var form = document.getElementById("fields");
    var input = form.appendChild(document.createElement("input"));
    input.type="text";  
    input.name="field"+form.childElementCount;
    input.className="wiki-block";
}