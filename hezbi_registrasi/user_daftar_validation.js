const form = document.getElementById('form');

form.addEventListener('submit' , (e) => {    
    if (!isValidNRP() || !isValidNama() || !isValidPassword() ||
     !confirm("Yakin ingin mensubmit data?"))
        e.preventDefault();
});
    
function debugValidate(){
    if (isValidNRP() && isValidNama() && isValidPassword())
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

function isValidPassword(){
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;

    if (confirm_password !== password){
        alert("Password tidak sama");
        return false;
    }
    if (password.length < 8){
        alert("Panjang password harus berisi lebih dari 7 karakter");
        return false;
    }
    return true;
}

function isValidNRP(){
    const nrp = document.getElementById('nrp').value;

    if (nrp.length == 0){
        alert('NRP tidak boleh kosong');
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