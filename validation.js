document.getElementById("registrationForm").addEventListener("submit", function (e) {
    let valid = true;

    // Validasi Nama
    const name = document.getElementById("name").value.trim();
    if (name.length < 3 || name.length > 50) {
        valid = false;
        document.getElementById("errorName").innerText = "Nama harus antara 3-50 karakter.";
    } else {
        document.getElementById("errorName").innerText = "";
    }

    // Validasi Alamat
    const address = document.getElementById("address").value.trim();
    if (address.length < 5) {
        valid = false;
        document.getElementById("errorAddress").innerText = "Alamat harus minimal 5 karakter.";
    } else {
        document.getElementById("errorAddress").innerText = "";
    }

    // Validasi Pekerjaan
    const job = document.getElementById("job").value.trim();
    if (job.length < 3) {
        valid = false;
        document.getElementById("errorJob").innerText = "Pekerjaan harus minimal 3 karakter.";
    } else {
        document.getElementById("errorJob").innerText = "";
    }

    // Validasi File
    const file = document.getElementById("file").files[0];
    if (!file) {
        valid = false;
        document.getElementById("errorFile").innerText = "File harus diunggah.";
    } else if (file.size > 1024 * 1024) {
        valid = false;
        document.getElementById("errorFile").innerText = "File tidak boleh lebih dari 1MB.";
    } else {
        document.getElementById("errorFile").innerText = "";
    }

    if (!valid) e.preventDefault();
});
