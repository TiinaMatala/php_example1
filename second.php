<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Assosiative array</h1>
    <?php
    $students=array(
      array("fn"=>'Jim', "ln"=>'Smith'),
      array("fn"=>'Lisa', "ln"=>'Jones'),
      array("fn"=>'Bill', "ln"=>'Daniels')
    );
     ?>
     <h3>print_r -function</h3>
     <?php print_r($students); ?>
     <h3>foreach-loop</h3>
     <ul>
       <?php
        foreach ($students as $row) {
          echo '<li>'.$row['fn'].' '.$row['ln'].'</li>';
        }
        ?>
      </ul>
      <h3>array to html-table</h3>
      <table border="1">
        <thead>
          <tr>
            <th>Firstname</th><th>Lastname</th>
          </tr>
        </thead>
        <tbody>
          <?php
           foreach ($students as $row) {
             echo '<tr>';
             echo '<td>'.$row['fn'].'</td>';
             echo '<td>'.$row['ln'].'</td>';
             echo '</tr>';
           }
           ?>
        </tbody>
      </table>
  </body>
</html>
