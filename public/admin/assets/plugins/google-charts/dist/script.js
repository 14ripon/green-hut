










var movies = ['Guardians of the Galaxy', 'The Avengers', 'Transformers: Age of Extinction'];

var values = [
  [1, 37.8, 80.8, 41.8],
  [2, 30.9, 69.5, 32.4],
  [3, 25.4, 57, 25.7],
  [4, 11.7, 18.8, 10.5],
  [5, 11.9, 17.6, 10.4],
  [6, 8.8, 13.6, 7.7],
  [7, 7.6, 12.3, 9.6],
  [8, 12.3, 29.2, 10.6],
  [9, 16.9, 42.9, 14.8],
  [10, 12.8, 30.9, 11.6],
  [11, 5.3, 7.9, 4.7],
  [12, 6.6, 8.4, 5.2],
  [13, 4.8, 6.3, 3.6],
  [14, 4.2, 6.2, 3.4]
];

google.charts.load('current', {
  'packages': ['line','bar']
});
google.charts.setOnLoadCallback(drawChart);

populate_filter();

function drawChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Day');
  movies.forEach(function(element) {
    data.addColumn('number', element);
  });

  data.addRows(values);

  var options = {
    chart: {
      title: 'Box Office Earnings in First Two Weeks of Opening',
      subtitle: 'in millions of dollars (USD)'
    },
    width: 900,
    height: 500
  };

  var chart = new google.charts.Line(document.getElementById('vis_div'));

  chart.draw(data, options);
}

function filter_line(data_line, index) { //index = array of indexes to keep
  var data_line_new = [];

  for (i = 0; i < data_line.length; i++) {
    data_line_new[i] = [];
    data_line_new[i][0] = data_line[i][0];
    for (j = 0; j < index.length; j++) {
      data_line_new[i][j + 1] = data_line[i][index[j]+1];
    }
  }
  return data_line_new;
}

function drawChart2(itemName, itemValues,chartType) { //chartType 'line' or 'bar'
  var data = new google.visualization.DataTable();
  data.addColumn('number', 'Day');
  itemName.forEach(function(element) {
    data.addColumn('number', element);
  });

  data.addRows(itemValues);

  var options = {
    chart: {
      title: 'Box Office Earnings in First Two Weeks of Opening',
      subtitle: 'in millions of dollars (USD)'
    },
    width: 900,
    height: 500
  };
  
  if(chartType==='line'){
   chart = new google.charts.Line(document.getElementById('vis_div'));  
  }
  else if (chartType==='bar'){
   chart = new google.charts.Bar(document.getElementById('vis_div'));  
  }
  else {alert('This chart is not supported');}
  

  chart.draw(data, options);

}

function add_line(data_line) {
  var data_line_new = data_line;
  //push data for each point
}

function populate_filter() {
  movies.forEach(function(element, index) {
    $('#filterDropdown').append('<option value=' + index + '>' + element + '</option>');
  });
}

function returnItemIndexes () { //return array of indexes of movies selected
  var index = [];
  $("#filterDropdown option:selected").each(function() {
      index.push(parseInt($(this).attr("value")));
  });
  if (index.length===0) {
   $("#filterDropdown option").each(function() {
      index.push(parseInt($(this).attr("value")));
  });
  }
  return index;
}

function returnItemNames () { //return array of indexes of movies selected
  var itemNames = [];
  $("#filterDropdown option:selected").each(function() {
      itemNames.push(movies[$(this).attr("value")]);
  });
  if (itemNames.length === 0){
     $("#filterDropdown option").each(function() {
      itemNames.push(movies[$(this).attr("value")]);
  });
  }
  return itemNames;
}

function returnChartType (){ //return chart type
  return ($('#chartTypeDropdown').val());
}

//////// EVENTS ////////////

$("#filterDropdown").change(function() {
  var itemValues = filter_line(values, returnItemIndexes());
  drawChart2(returnItemNames(), itemValues,returnChartType());
});

$("#chartTypeDropdown").change(function() {
  var itemValues = filter_line(values, returnItemIndexes());
  drawChart2(returnItemNames(), itemValues,returnChartType());
});


