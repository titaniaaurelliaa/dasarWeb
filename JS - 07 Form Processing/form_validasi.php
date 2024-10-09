<html>
    <head>
        <title>Form input dengan validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form input dengan validasi</h1>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color : red;"></span>
            <br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color : red;"></span>
            <br>

            <input type="submit" value="submit">
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan di sini -->
        </div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (valid) {
                        !event.preventDefault();
                        // menghentikan pengiriman form jika validasi gagal
                    
                    }

                    //Mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    // Kirim data ke server PHP
                    $.ajax({
                        url: "proses_validasi.php", //Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            //Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>