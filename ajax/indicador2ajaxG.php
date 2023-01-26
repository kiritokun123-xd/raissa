
<?php
foreach($indicadores as $indicadore){
    $indice = $indicadore->cost_uni_alm;
}
if(!$indice){
    exit;
}
?>

<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    if(myChart2){
        myChart2.destroy();
    }

    myChart2 = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Costo Unidad Almacenada','Límite'],
            datasets: [{
                label: '# Datos',
                data: [<?php echo $indice;?>, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
