google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Monthly', 'Review', 'Points', 'Balance'],
                    ['Jan', 1000, 400, 200],
                    ['Feb', 1170, 460, 250],
                    ['Mar', 660, 1120, 300],
                    ['Apr', 1030, 540, 350],
                    ['May', 1050, 580, 350],
                    ['Jun', 1130, 540, 370],
                    ['Jul', 1230, 640, 350],
                    ['Aug', 1030, 520, 650],
                    ['Sep', 1080, 540, 320],
                    ['Oct', 1230, 640, 350],
                    ['Nov', 1030, 520, 650],
                    ['Dec', 1100, 540, 320]
                ]);

                var options = {
                    chart: {
                        title: 'Listing Analytics Report',
                        subtitle: 'Review, Points, Balance',                        
                    },
                    colors: ['#45cafc', '#303f9f', '#9b72e8']
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }