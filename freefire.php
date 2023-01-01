<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free Fire</title>
    <link rel="shortcut icon" href="https://media.discordapp.net/attachments/996447135547539478/1004679216316559410/logo_1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="sampul">
        <a href="/index.html">
            <i class="fa fa-angle-left"></i>
        </a>
        <img src="Free Fire.webp"/>
        <h2>Free Fire</h2>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="playId" placeholder="User ID" required>
        <label for="playId">User ID</label>
    </div>
    <div style="text-align: center;">
        <a href="/docs">
            Confused?
        </a>
    </div><br/>
    <div style="text-align: center; color: #FFFFFF;">
        <button class="glow-on-hover" onclick="return checkId();" onmousedown="buka.play();">Search</button>
    </div>
    <br/><input style="border: none;" type="text" class="form-control" name="nick" id="getNickId" placeholder="Result" readonly>
    <script>
// tombol untuk memunculkan popup
function checkId() {
	var playId = $("#playId").val();
	
	if(playId == "") {
		Swal.fire({
  icon: 'error',
  title: 'User ID Tidak Boleh Kosong!',
  confirmButtonColor : 'primary',
  
  
});
	} else {
		$.ajax({
			url: 'ffid.php',
			type: 'POST',
			data: 'playId='+playId,
			beforeSend: function() {
			Swal.fire({

  title: 'Tunggu Sebentar',
  confirmButtonColor : 'primary',
  
  
})
Swal.showLoading();
			},
			success: function(response) {
				if(response == "") {
					Swal.fire({
  icon: 'error',
  title: 'User ID Tidak Ditemukan!',
  confirmButtonColor : 'primary',
  
  
});
				} else {
				Swal.fire({
  icon: 'success',
  title: 'User ID Ditemukan',
  confirmButtonColor : 'primary',
  
  
});
					$("#setNick").html(response);
					$("input#getUId").val(playId);
					$("input#getNickId").val(response);
					$(".welcome").hide();
					
				}
			}
		});
	}
}
</script>
<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>        
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>