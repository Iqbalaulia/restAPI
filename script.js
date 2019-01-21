// Mengubah Object jadi JSON

// let mahasiswa = {
//     nama: "Muhammad Iqbal Aulia Rafi",
//     NIM: "16410100012",
//     email: "miqbalar16@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// ====================================

// JSON ke Object
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }

// // menjalankan Ajax
// xhr.open('GET', 'coba.json', 'true');
// xhr.send();



// ======================================
$.getJSON("coba.json", function (data, textStatus, jqXHR) {
    console.log(data);
});