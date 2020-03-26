function copy() {
    /* Get the text field */
  let copyText = document.getElementById("textCopy");

  /* Select the text field */
  copyText.select();
  /*For mobile devices select range min max for text*/
  copyText.setSelectionRange(0, 99999);

  /* Copy the text inside the text field */
  document.execCommand("copy");
    
  /* Alert the copied text */
  console.log("Copied the text: " + copyText.value);
}
