<?php 
include 'principal.php';
$conto = 1;
$link = BancoConecta();
$sql =  <<<EOT
    SELECT 
        Name, Population, LifeExpectancy, GNP
    FROM
         country
    WHERE
        Continent = 'Africa'
    order by
         GNP desc
EOT;?>
<main main="role" class="container">
<h1 style ="color: blue">Países da África</h1>
<p style= "color:indigo">Em Inglês,em ordem descrescente de expectativa de vida<p>

</tr>
<table class="table table-striped table-sm table-bordered">
  <thead>
    <tr class ="table-active">
    <th class ="table-primary" scope="col"></th>
      <th class ="table-primary" scope="col">Name</th>
      <th class ="table-second" scope="col">Population</th>
      <th class ="table-primary" scope="col">LifeExpectancy</th>
      <th class ="table-primary" scope="col">GNP</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(executaSelect($link,$sql) as $linha) { ?>
    <tr>
      <th scope="row"><?php echo $conto++?></th>
      <td><?=$linha['Name']?></td>
			<td><?=$linha['Population']?></td>
			<td><?=$linha['LifeExpectancy']?></td>
			<td><?=$linha['GNP']?></td>
    </tr>
    <?php } /*foreach*/ ?>
      
  </tbody>
</table> 
</main>
