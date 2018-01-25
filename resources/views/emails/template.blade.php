<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body style="box-sizing: border-box; background-color: #CACACA; font-family: Helvetica Neue, Helvetica, Verdana, Arial, sans-serif;  font-size: 20px;">
    <table style="width: 100%; text-align:center; vertical-align: middle;">
      <tr>
        <td>
          <table style="width: 700px; display: block; margin: 0 auto;">
            <tr>
              <td colspan="2" style="height: 200px;">
                <h2>Un nouveau message vient d'être envoyé via le formulaire de contact.</h2>
              </td>
            </tr>
            <tr style="padding-top: 30px;">
              <td>
                Nom : {{$contact['nom']}} Prénom : {{$contact['prenom']}}
              </td>
            </tr>
            <tr>
              <td colspan="2">
                @if($contact['tel'] != null)
                  Numéro de Téléphone : {{$contact['tel']}}
                @endif
              </td>
            </tr>
            <tr>
              <td>
                {{$contact['addrMail']}}
              </td>
            </tr>
            <tr style="margin-top: 20px;">
              <td style="font-weight:bold;">
                @switch ($contact['raison'])
                  @case('1')
                    [Pro]
                  @break
                  @case('2')
                    [Perso]
                  @break
                  @case('3')
                    [Autre]
                  @break
                @endswitch

                {{$contact['sujet']}}
              </td>
            </tr>
            <tr>
              <td  style="text-align: justify;">
                {{$contact['msguser']}}
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>