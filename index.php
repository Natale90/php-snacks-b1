<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP day 2</title>


    <style media="screen">

      .snack1{
        border:3px solid purple;
        background-color: pink;
      }

      .winner{
        color:green;
      }

      .looser{
        color: red;
      }
      .snack2{
        background-color: orange;
        text-align: center;
        font-size: 20px;
        margin-top: 50px;
        border:3px solid purple;
        padding: 20px 0;
      }
      .verify{
        background-color: rgba(0,0,0, 0.2);
        padding:10px;
        border-radius: 10px;
      }

    </style>

  </head>
  <body>

    <div class="snack1">
      <h1>Snack 1</h1>

      <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
      Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
      Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 -->


      <?php

        $legue = [

          [
            'host' => 'TeamHost1',
            'guest' => 'teamGuest1',
            'hostScore' => 10,
            'guestScore' => 5,
          ],
          [
            'host' => 'TeamHost2',
            'guest' => 'teamGuest2',
            'hostScore' => 1,
            'guestScore' => 3,
          ],
          [
            'host' => 'TeamHost3',
            'guest' => 'teamGuest3',
            'hostScore' => 9,
            'guestScore' => 5,
          ],
          [
            'host' => 'TeamHost4',
            'guest' => 'teamGuest4',
            'hostScore' => 11,
            'guestScore' => 6,
          ]

        ];

        $legueMatch = [];
        for($i=0;$i<count($legue);$i++){

          $match = $legue[$i];
          $legueMatch []= $match;
          echo
          "<div>"
          . $match['host']
          . ' '
          . '-'
          . ' '
          . $match['guest']
          .' '
          . '/'
          .' '
          . $match['hostScore']
          .'-'
          . $match['guestScore']
          . "</div>";
        }

      ?>

      <div class="tabellone">
        <h1>Tabellone</h1>

        <div class="match">
          <span>
            <?php echo $legueMatch[0]['host'] ?>
          </span>

          <span>
            -
          </span>

          <span>
            <?php echo $legueMatch[0]['guest'] ?>
          </span>

          <span>
            <?php echo $legueMatch[0]['hostScore'] ?>
          </span>

          <span>
            -
          </span>

          <span>
            <?php echo $legueMatch[0]['guestScore'] ?>
          </span>
        </div>

        <div class="match">
        <span>
          <?php echo $legueMatch[1]['host'] ?>
        </span>

        <span>
          -
        </span>

        <span>
          <?php echo $legueMatch[1]['guest'] ?>
        </span>

        <span>
          <?php echo $legueMatch[1]['hostScore'] ?>
        </span>

        <span>
          -
        </span>

        <span>
          <?php echo $legueMatch[1]['guestScore'] ?>
        </span>
      </div>

        <div class="match">
        <span>
          <?php echo $legueMatch[2]['host'] ?>
        </span>

        <span>
          -
        </span>

        <span>
          <?php echo $legueMatch[2]['guest'] ?>
        </span>

        <span>
          <?php echo $legueMatch[2]['hostScore'] ?>
        </span>

        <span>
          -
        </span>

        <span>
          <?php echo $legueMatch[2]['guestScore'] ?>
        </span>
      </div>

      </div>

    </div>

    <div class="snack2">
      <h1>
        Snack2
      </h1>
      <!-- Passare come parametri GET name, mail e age e verificare
      (cercando i metodi che non conosciamo nella documentazione)
      che name sia più lungo di 3 caratteri, che mail contenga un punto e
      una chiocciola e che age sia un numero. Se tutto è ok stampare
      "Accesso riuscito", altrimenti "Accesso negato" -->

      <?php

      $newName = $_GET ['name'];
      $newMail = $_GET ['email'];
      $newAge =  $_GET ['age'];

      $dotCheck = '.';
      $atCheck = '@';



      if(strlen($newName) > 3 && (strpos($newMail, $dotCheck) !== false) && (strpos($newMail, $atCheck) !== false) && (is_numeric($newAge) !== false)){

        echo "<span class ='verify'>" . "Accesso riuscito" . "</span>";
      } else{

        echo "<span class ='verify'>" . "Accesso negato" . "</span>";
      }

      ?>
    </div>
  </body>
</html>
