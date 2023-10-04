import './bootstrap';

console.log('tito');


function copyToClipboard() {
    let copyText = document.getElementById("textToCopy");
    copyText.select();
    copyText.setSelectionRange(0, 99999); 
    navigator.clipboard.writeText(copyText.value);
    alert("Copied the text: " + copyText.value);
}