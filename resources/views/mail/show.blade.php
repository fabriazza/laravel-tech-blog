<html>
<body>
    <h1>Una novo messaggio dal tuo sito!</h1>

    <p>Inviato da: {{ $mailBag['name'] }}</p>
    <p>Con la email {{ $mailBag['mail'] }}</p>

    <p>Oggetto: {{ $mailBag['subject'] }}</p>

    <p>Messaggio: {{ $mailBag['message'] }}</p>
</body>
</html>
