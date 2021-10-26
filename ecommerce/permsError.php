die ('
<style>
    body {
        margin: auto;
        border: solid 3px #FF0000;
        font-size: 18px;
        font-family: Verdana;
        background-color: #6b6b6b;
    }

    footer {
        text-align: center;
        padding: 3px;
        font-size: 8px;
    }

    #reload_button {
        background: #7f00ff;
        color: rgb(199, 199, 199);
        border: 0;
        line-height: 34px;
        padding: 0 15px;
        font-family: "Helvetica Neue", helvetica, arial, sans-serif;
        font-size: 14px;
        border-radius: 3px;
    }
</style>
<body>
<center><h1>Si è verificato un errore <br><span>(Code 403)</span></h1>
    <b>Non sei autorizzato</b> a visualizzare questa pagina. <br>
    <br>
    <p> Se credi sia un errore, contatta l\'amministratore del sito.
        <br>Puoi tornare alla pagina precedente cliccando sul pulsante qui sotto.
        <br><br>
        <button onclick="window.history.back();" id=\'reload_button\'>Torna Indietro</button>
    <footer>Powered by <a href="http://kgn.ovh/" target="_blank">Keegan</a></footer>
    ');