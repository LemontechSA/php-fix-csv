<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Computed Table</title>
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 12px;
      }
      table {
        width: 100%;
        border: 1px solid black;
      }
      tr {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
        <?php foreach ($this->csv[0] as $header): ?>
          <th><?= $header ?></th>
        <?php endforeach ?>
        </tr>
      </thead>
      <tbody>
        <?php for ($x = 1; $x <= count($this->csv) -2; $x++): ?>
        <tr>
          <?php foreach ($this->csv[$x] as $column): ?>
          <td><?= $column ?></td>
          <?php endforeach ?>
        </tr>
        <?php endfor ?>
      </tbody>
      <tfoot>
        <tr>
          <?php foreach ($this->csv[count($this->csv)-1] as $footer): ?>
            <th><?= $footer ?></th>
          <?php endforeach ?>
        </tr>
      </tfoot>
    </table>
  </body>
</html>