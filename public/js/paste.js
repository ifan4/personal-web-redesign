// document.getElementById('copy').addEventListener('click', ()=>{
//     /* document.getElementById('copyArea').select();
//     document.execCommand('copy'); */
//     let copyArea = document.getElementById('copyArea');
//     navigator.clipboard.writeText(copyArea.value);
// });
document.getElementById('pasteBtn').addEventListener('click', ()=>{
    console.log("test");
    let pasteArea = document.getElementById('isi');
    pasteArea.value = '';
    navigator.clipboard.readText()
    .then((text)=>{
        pasteArea.value = text;
    });
});