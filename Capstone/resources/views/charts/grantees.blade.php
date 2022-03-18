<script>
    var year = ['SPORTS DEV','CULTURE AND ARTS','HUMAN RESOURCE','DISCOUNTS','GOVERNMENT','OTHERS']
    var user = [54,34,23,65,23, 67,32];
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Scholarship Grantees',
            backgroundColor: '#EA5C2B',
            data: user
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