<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<?php
echo 'hello';
echo "<p><b><font size='4'> Rating & Ulasan dari ".$name
                                 ." </font><b></p><button type='button' onclick='review()' class='btn btn-warning'>Berikan Ulasan</button><br>";
                         echo "";
                         echo "<div id='ulas' class='col-sm-6' hidden='true'><form>
                                <fieldset>
                                 Ulasan<br>
                                 <div id='rateCuy'></div>
                                 Judul: <input type='text' maxlength='50'><br>
                                 Deskripsi: <textarea style='width: 480px; height: 123px; resize: none;' rows='4' cols='50' maxlength='200'></textarea><br>
                                 Date of birth: <input type='text'>
                                </fieldset>
                               </form></div>";
							   
							   
?>
<script>
     $("#rateCuy").rateYo({
    normalFill: "#A0A0A0",
    starWidth: "22px",
    fullStar: true,
  });
  
  function review() {
   
                $('#ulas').show();
           
   
}

</script>
