<script>
    var year = ['SPORTS DEVELOPMENT','CULTURE AND ARTS','HUMAN RESOURCE','SGO DISCOUNTS','GOVERNMENT GRANTS','OTHERS'];
    var user = [54,34,23,65,23, 67,32];
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Scholarship Grantees',
            // backgroundColor: "red",
            data: user
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas1").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
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