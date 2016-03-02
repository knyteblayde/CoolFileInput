<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" id="inputFile" name="inputFile[]" class="inputFile" multiple>
    <label for="inputFile" class="inputLabel">Choose a file...</label>
    <button type="submit" class="buttonUpload">Upload</button>
</form>

<script>
    (function(){
        var inputFile = document.getElementById('inputFile'),
            inputLabel = inputFile.nextElementSibling,
            defaultLabel = inputLabel.innerHTML;

        inputFile.addEventListener('change', function(){
            if (!inputFile.files[0]) {
                inputLabel.innerHTML = defaultLabel;
            }
            else if (inputFile.files.length > 1) {
                inputLabel.innerHTML = inputFile.files.length + " files selected.";
            } else {
                inputLabel.innerHTML = inputFile.files[0].name;
            }
        });
    }());
</script>

</body>
</html>