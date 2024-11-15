const ctx = document.getElementById('chartIngresos');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril',
         'Mayo', 'Junio', 'Julio', 'Agosto',
          'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      datasets: [{
        label: 'Ganancia por mes',
        data: [3000, 23234, 32432, 333, 89890, 736,4000, 1000, 67, 523, 41123, 989],
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

  const ctx2 = document.getElementById('chartCategorias');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Desayuno', 'Comida', 'Cenas', 'Snacks'
         ],
      datasets: [{
        label: 'Dietas popr categoria',
        data: [30, 23, 32, 14, ],
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