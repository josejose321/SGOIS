<script>
    var year = ['SPORTS DEV SCHOLARSHIPS','CULTURE AND ARTS SCHOLARSHIPS','HUMAN RESOURCE SCHOLARHIP','DISCOUNTS','EXTERNAL GRANTS']
    var data = JSON.parse('{{ json_encode($chartResult ?? '') }}');
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Scholarship Grantees',
            backgroundColor: [
                'rgba(0, 0, 0, 0.46)',
                'rgba(0, 0, 0, 0.46)',
                'rgba(0, 0, 0, 0.46)',
                'rgba(0, 0, 0, 0.46)',
                'rgba(0, 0, 0, 0.46)',

            ],
            data: data
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 1,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'SCHOLARSHIPS'
                }
            }
        });
    };
</script>
