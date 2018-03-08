<html>

    <head>
        <meta charset="utf-8">
        <title>Blockchain notary</title>
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
        
    </head>
    <body id="page-top">
        {include file="navbar.tpl"}
                
        <header class="masthead text-left text-white d-flex">
          <div class="container my-auto">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                  <h3>Il tuo file è stato certificato con successo!</h3>
                <ul>
                    <li> Il tuo file: {$file_name}</li>
                    <li>La firma(hash) del tuo file: {$hash}</li>
                    <li>L'ID della transazione bitcoin: {$txid}</li>
                </ul>
                  <p>Ricorda di salvare l'ID della transazione bitcoin potrai utilizzarlo in futuro per verificare il tuo file</p>
              </div>

            </div>
          </div>
        </header>
    
    </body>
</html>