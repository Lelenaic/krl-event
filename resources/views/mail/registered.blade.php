<html>
<head>
    <meta charset="utf-8"/>
</head>
<body>
<p>
    Merci pour votre participation !<br>
    Vous avez correctement été inscrit à l'évènement <b>Workshop Docker</b> !<br>
    Rendez-vous le 04 Novembre !<br>
    N'oubliez surtout pas d'emmener votre ordinateur !<br>
    La connexion internet est fournie, la nourriture aussi (goûter et déjeuner).<br>
    Si vous souhaitez un justificatif de paiement, merci de nous contacter via le formulaire de contact ou en répondant
    à ce mail.<br>
    @if(!is_null($stripe))
        Voici votre numéro de transaction bancaire, conservez-le bien, nous vous le demanderons en cas de problème de
        paiement : <b>{{$stripe}}</b>
    @else
        Pour rappel, vous paierez au Workshop par carte, chèque ou en liquide.
    @endif
</p>
</body>
</html>