let submitButton = document.getElementById("submit");


//Algoritma Menghitung Jumlah Kata dan huruf
function hitungJumlah(isi) {
    let jumlahHuruf = document.getElementById("jumlah-huruf");
    let jumlahKata = document.getElementById("jumlah-kata");
    let totalKata = 0,
        totalHuruf = 0;

    let arrIsi = isi.split("\n");

    arrIsi.forEach(element => {
        let arrinarr = element.split(" ");
        console.log(arrinarr);
        arrinarr.forEach(element => {
            if (element != "") {
                totalHuruf += element.length;
                totalKata++;
            }
        });
    });

    console.log("total kata: " + (totalKata));
    console.log("Total Huruf: " + (totalHuruf));

    jumlahKata.innerHTML = totalKata;
    jumlahHuruf.innerHTML = totalHuruf;
}


submitButton.addEventListener("click", () => {
    let isi = document.getElementById("isi").value;
    let hasil = document.getElementById("hasil");
    let duplicateIsi = document.getElementById("duplicate-isi");

    if (isi.length > 0) {
        hitungJumlah(isi);
        duplicateIsi.innerText = isi;
        hasil.classList.remove("d-none");
    }
})