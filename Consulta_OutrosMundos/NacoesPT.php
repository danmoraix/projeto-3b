<?php 
include 'principal.php';
$conto = 1;
$link = BancoConecta();
$sql =  <<<EOT
        SELECT 
            c.Name, c.Continent, cl.IsOfficial, cl.Percentage
        FROM 
            country as c,  
            countrylanguage as cl
        WHERE
            c.Code = cl.CountryCode and 
            cl.Language = 'Portuguese' 
EOT;?>
<main main="role" class="container">
<h1>Países que falam português</h1>
<p style= "color:tomato">Em Inglês<p>
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
      <th class ="table-primary" scope="col">Nome</th>
      <th class ="table-second" scope="col">Continente</th>
      <th class ="table-primary" scope="col">Idioma</th>
      <th class ="table-primary" scope="col">Language Official?</th>
      <th class ="table-primary" scope="col">Percentual</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(executaSelect($link,$sql) as $linha) { ?>
    <tr>
      <th scope="row"><?php echo $conto++?></th>
      <td><?=$linha['Name']?></td>
			<td><?=$linha['Continent']?></td>
			<td><?=$linha['IsOfficial']?></td>
			<td><?=$linha['Percentage']?></td>
    </tr>
    <?php } /*foreach*/ ?>
      
  </tbody>
</table> 
</main>
