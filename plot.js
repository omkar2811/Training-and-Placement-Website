var data = [{
  values: [19, 26, 55],
  labels: ['IT', 'ENTC', 'Computer'],
  type: 'pie'
}];
var layout = {
  height: 500,
  width: 1500
};

Plotly.newPlot('myDiv', data, layout);