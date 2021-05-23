<?php 
include 'principal.php';
$conto = 1;

$link = BancoConecta();
$sql =  <<<EOT
    SELECT city.Name, city.Population, country.Continent
      FROM city, country
      WHERE city.CountryCode = country.Code
       and (country.Continent ='South America' or country.Continent = 'Africa')
      order by city.Population DESC
EOT;?>

<main main="role" class="container">
<h1 style= "color: blue">Cidades Sulamericanas e Africanas</h1>
<p style= "color:tomato">Em Inglês<p>

<table class="table table-striped table-sm table-bordered">
  <thead>
    <tr class ="table-active">
    <th class ="table-primary" scope="col"></th>
      <th class ="table-primary" scope="col">Name</th>
      <th class ="table-second" scope="col">Population</th>
      <th class ="table-second" scope="col">Continent</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(executaSelect($link,$sql) as $linha) { ?>
    <tr>
      <th scope="row"><?php echo $conto++?></th>
      <td><?=$linha['Name']?></td>
			<td><?=$linha['Population']?></td>
      <td><?=$linha['Continent']?></td>

    </tr>
    <?php } /*foreach*/ ?>
      
  </tbody>
</table> 
</main>
