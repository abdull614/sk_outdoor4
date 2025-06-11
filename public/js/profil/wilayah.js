// notif succes simpan
document.addEventListener('DOMContentLoaded', function () {
    const alert = document.getElementById('success-alert');
    if (alert) {
        setTimeout(function () {
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.remove();
            }, 500); // Tunggu efek transisi
        }, 3000); // Tampilkan selama 3 detik
    }
});

document.addEventListener('DOMContentLoaded', function () {
// Ambil data Provinsi
fetch(`https://kanglerian.my.id/api-wilayah-indonesia/api/provinces.json`)
  .then((response) => response.json())
  .then((provinces) => {
    let tampung = `<option>Pilih</option>`;
    provinces.forEach((element) => {
      tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
    });
    document.getElementById("provinsi").innerHTML = tampung;
  });

// Event untuk Provinsi -> Kota
document.getElementById("provinsi").addEventListener("change", (e) => {
    const provinsiId = e.target.options[e.target.selectedIndex].dataset.reg;
    fetch(`https://kanglerian.my.id/api-wilayah-indonesia/api/regencies/${provinsiId}.json`)
        .then((response) => response.json())
        .then((regencies) => {
        let tampung = `<option>Pilih</option>`;
        document.getElementById("kota").innerHTML = `<option>Pilih</option>`;
        document.getElementById("kecamatan").innerHTML = `<option>Pilih</option>`;
        document.getElementById("kelurahan").innerHTML = `<option>Pilih</option>`;
        regencies.forEach((element) => {
            tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
        });
        document.getElementById("kota").innerHTML = tampung;
        });
    });

    // Event untuk Kota -> Kecamatan
    document.getElementById("kota").addEventListener("change", (e) => {
    const kotaId = e.target.options[e.target.selectedIndex].dataset.dist;
    fetch(`https://kanglerian.my.id/api-wilayah-indonesia/api/districts/${kotaId}.json`)
        .then((response) => response.json())
        .then((districts) => {
        let tampung = `<option>Pilih</option>`;
        document.getElementById("kecamatan").innerHTML = `<option>Pilih</option>`;
        document.getElementById("kelurahan").innerHTML = `<option>Pilih</option>`;
        districts.forEach((element) => {
            tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
        });
        document.getElementById("kecamatan").innerHTML = tampung;
        });
    });

    // Event untuk Kecamatan -> Kelurahan
    document.getElementById("kecamatan").addEventListener("change", (e) => {
    const kecamatanId = e.target.options[e.target.selectedIndex].dataset.vill;
    fetch(`https://kanglerian.my.id/api-wilayah-indonesia/api/villages/${kecamatanId}.json`)
        .then((response) => response.json())
        .then((villages) => {
        let tampung = `<option>Pilih</option>`;
        document.getElementById("kelurahan").innerHTML = `<option>Pilih</option>`;
        villages.forEach((element) => {
            tampung += `<option value="${element.name}">${element.name}</option>`;
        });
        document.getElementById("kelurahan").innerHTML = tampung;
        });
    });

    function setSelectedOption(selectId, valueToSelect) {
        const select = document.getElementById(selectId);
        if (!select || !valueToSelect) return;

        const interval = setInterval(() => {
            if (select.options.length > 1) {
                for (const option of select.options) {
                    if (option.value === valueToSelect) {
                        option.selected = true;
                        select.dispatchEvent(new Event("change")); // trigger next level
                        clearInterval(interval);
                        break;
                    }
                }
            }
        }, 300);
    }

    
        const prov = document.getElementById("provinsi").dataset.selected;
        const kota = document.getElementById("kota").dataset.selected;
        const kec = document.getElementById("kecamatan").dataset.selected;
        const kel = document.getElementById("kelurahan").dataset.selected;

        setTimeout(() => {
            setSelectedOption("provinsi", prov);
            setTimeout(() => {
                setSelectedOption("kota", kota);
                setTimeout(() => {
                    setSelectedOption("kecamatan", kec);
                    setTimeout(() => {
                        setSelectedOption("kelurahan", kel);
                    }, 1000);
                }, 1000);
            }, 1000);
        }, 1000);

});
