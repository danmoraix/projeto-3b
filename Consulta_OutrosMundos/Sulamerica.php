<?php 
include 'principal.php';
$conto = 1;
$link = BancoConecta();
$sql =  <<<EOT
  SELECT 
    Name, Population, LifeExpectancy, GNP 
  From 
    country 
  WHERE
     Continent LIKE 'South America' 
  ORDER by LifeExpectancy desc
EOT;?>
<main main="role" class="container">
<h1 style= "color: cyan">Países da América do Sul</h1>
<p style= "color:tomato">Em Inglês, em ordem descrescente de expectativa de vida <p>
<!-- Em linhas - ->
<!- -<tr class="table-active">...</tr>

<tr class="table-primary">...</tr>
<tr class="table-secondary">...</tr>
<tr class="table-success">...</tr>
<tr class="table-danger">...</tr>
<tr class="table-warning">...</tr>
<tr class="table-info">...</tr>
<tr class="table-light">...</tr>
<tr class="table-dark">...</tr>

< !-- Em células (`td` ou `th`) -- >
<tr>
  <td class="table-active">...</td>
  
  <td class="table-primary">...</td>
  <td class="table-secondary">...</td>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
  <td class="table-info">...</td>
  <td class="table-light">...</td>
  <td class="table-dark">...</td>
</tr>-->
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
