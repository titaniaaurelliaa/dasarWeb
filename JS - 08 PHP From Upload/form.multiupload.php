<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
            <!--<input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">-->
            <input type="file" name="files[]" multiple="multiple" accept=".png, .jpg, .jpeg">
            <input type="submit" value="Unggah">
        </form>
    </body>
</html>