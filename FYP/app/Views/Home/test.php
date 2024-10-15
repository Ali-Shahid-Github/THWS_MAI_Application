<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <link rel="stylesheet" href="/assets/vendor/summernote/summernote-bs4.min.css" >
</head>

<body>
    <div class="container my-3">
    <?= form_open("Home/checkTest", ["onsubmit"=> "return save()"]) ?>
        <input type="hidden" name="res" id="res">
        <input type="text" name="as" id="summernote">
        <div class="text-center ">
            <a href="#" style="color: white; text-decoration: none; font-size: 18px;">
                <button class="submit my-2" type="submit">

                    <i class="fas fa-plus-square "></i>&nbsp;&nbsp;Submit

                </button>
            </a>
        </div>
    </form>
    </div>










    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    <script async src="/assets/vendor/summernote/summernote-bs4.min.js"></script>




    <script>
        function save()
            {
                var markupStr = $('#summernote').summernote('code');
                console.log(markupStr);
                document.getElementById("res").value = markupStr;
                // return false;
            }
        $(document).ready(function() {
            
            $('#summernote').summernote({
            placeholder: 'Write Your Blog',
            tabsize: 2,
            height: 250,

            toolbar: [
                ['style', ['style', 'undo', 'redo', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontname', 'fontsizeunit', 'fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height', 'fullscreen']],
                ['insert', ['picture', 'link', 'table', 'hr']]
            ],

        });
        });
       
    </script>
</body>

</html>