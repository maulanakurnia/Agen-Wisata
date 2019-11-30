var keyword     = document.getElementById('keyword');
var cari        = document.getElementById('cari');
var container   = document.getElementById('formcari');

keyword.addEventListener('keyup', function () {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        // Cek Kesiapan Ajax
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    // Eksekusi Ajax
    xhr.open('GET', 'http://localhost/agen_wisata/vendor/ajax/?keyword=' + keyword.value, true);
    xhr.send();
});

