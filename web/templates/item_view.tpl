<html>

    <head>
        <meta charset="utf-8">
        <title>Lista certificazioni</title>
        <!-- Bootstrap core CSS -->
        <link href="web/grafic/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="web/grafic/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- Plugin CSS -->
        <link href="web/grafic/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="web/grafic/css/creative.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="jshashes-master/hashes.js"></script>
        <script type="text/javascript" src="jsplugin/redirect.js"></script>
    </head>
    <body id="page-top">
        {include file="navbar.tpl"}
        <header class="masthead text-left text-white d-flex">
          <div class="container my-auto">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                  <h3>Da qui puoi verificare il tuo file</h3>
                <ul>
                    <li> Il tuo file: {$dati['file_name']}</li>
                    <li>La firma(hash) del tuo file: {$dati['hashfile']}</li>
                    <li>L'ID della transazione bitcoin: {$dati['txid']}</li>
                    <li>Orario di ricezione: {$dati['recived_time']}</li>
                    {if $dati['confirmed_time']!=""}<li>Orario di conferma: {$dati['confirmed_time']}</li>
                    {else}
                    <li>Il tuo file non è stato ancora confermato, quando lo sarà visualizzerai l'orario di conferma</li>
                    {/if}
                    <li>Il tuo file ha ricevuto {$dati['confirmations']} conferme (6 o più conferme sono sufficenti per considerare la certificazione non modificabile)</li>
                </ul>
                  <p>Carica qui il file per verificarne l'autenticità</p>
                  <input class="btn btn-primary btn-xl js-scroll-trigger" name="myFile" type="file" id="file"> 
                  <button class="btn btn-primary btn-xl js-scroll-trigger" id="submit">Carica documento</button>
              </div>

            </div>
          </div>
        </header>
        
        
        
        
        
        
        
        
        
        <!--
        <ul>
            <li>{$dati['file_name']}</li>
            <li>{$dati['hashfile']}</li>
            <li>{$dati['confirmations']}</li>
            <li>{$dati['recived_time']}</li>
            <li>{$dati['confirmed_time']}</li>
            <li><input name="myFile" type="file" id="file"> <button id="submit">Submit</button> </li>
        </ul>

    
    -->
    </body>
    <script type="text/javascript">
        var old_hash="{$dati['hashfile']}"; 
            document.getElementById("submit").addEventListener("click", function(){
            var files=document.getElementById("file").files;
            var file1=files[0];
            var reader = new FileReader();
              
            reader.onload = function(event) {
                var dataURL = event.target.result;
                // new SHA256 instance and hexadecimal string encoding
                var SHA256file1= new Hashes.SHA256().hex(dataURL);
                //load hash on server
                {literal}
                $.redirect('check_certification.php', {'hash_file': SHA256file1, 'file_name': file1.name, 'old_hash': old_hash });
                {/literal}
            };

            reader.readAsDataURL(file1);

        });
        
    
    
    
    </script>
</html>