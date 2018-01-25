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
                <h2>Le formulaire de contact a rencontré quelque soucis.</h2>
              </td>
            </tr>
            <tr>
              <td>
                Erreurs :
              </td>
            </tr>
            @foreach ($erreurMail as $erreurMail->$erreur)
            <tr>
              <td>
                {{$erreur}}
              </td>
            </tr>
            @endforeach
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>