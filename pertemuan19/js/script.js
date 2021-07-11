// ambil elemen2 yang dibutuhkan
const keyword = document.getElementById('keyword');
const tombolCari = document.getElementById('tombol-cari');
const table = document.getElementsByTagName('table')[0];

// tambahkan event ketika keyword diketik
keyword.addEventListener('keyup', function() {
    
    // buat object ajax
    let xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {
            table.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();


});