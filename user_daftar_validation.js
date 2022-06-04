const form = document.getElementById('form');

form.addEventListener('submit' , (e) => {    
    if (!isValidNRP() || !isValidNama() ||
     !confirm("Yakin ingin mensubmit data?"))
        e.preventDefault();
});
    
function debugValidate(){
    if (isValidNRP() && isValidNama())
        console.log("sukses");
    else
        console.log("gagal");
}

function isValidNama(){
    const nama = document.getElementById('nama').value;

    for (const c of nama)
        if (!isCharacter(c.toLowerCase().charCodeAt(0))){
            alert("Nama hanya boleh berisi huruf alphabet dan spasi");
            return false;
        }   
    return true;
}

function isValidNRP(){
    const nrp = document.getElementById('nrp').value;

    if (nrp.length > 10){
        alert('NRP tidak boleh lebih dari 10 karakter');
        return false;
    }

    for (const c of nrp)
        if (!isNumber(c.charCodeAt(0))){
            alert("NRP hanya boleh berisi angka");
            return false;
        }
    return true;
}

function isNumber(code){
    return code >= 48 && code <= 57;
}

function isCharacter(code){
    return code == 32 || code >= 97 && code <= 122;
}