function copy() {
    //select the button
    let textCopy = document.getElementById("copy");

    //select the text
    // textCopy.select();

    //copy text
    document.execCommand("copy");
    alert(document.execCommand("copy"))
}

function paste(){
    let textPaste = document.getElementById("paste");

    //paste the texte in html

}