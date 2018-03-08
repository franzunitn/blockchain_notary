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
    </head>
    <body>
        {include file="navbar.tpl"}
                
        <header class="masthead text-left text-white d-flex">
            <div class="container my-auto">
                <div class="row">
                    {if $empty}
                        <p>Non hai ancora certificato nessun file</p>
                    {else}
                      <div class="col-lg-12">
                          <h3>Le tue ceritifcazioni</h3>
                      </div>
                </div>
                <div class="row">
                    {foreach name='result' from=$result item=res}
                        <div class="col-lg-6">
                            <a href="item_view.php?txid={$res['txid']}&file_name={$res['file_name']}"> {$res['file_name']} </a>
                        </div>
                    {/foreach}
                </div>
                {/if}
            </div>
        </header>
        
    </body>
</html>