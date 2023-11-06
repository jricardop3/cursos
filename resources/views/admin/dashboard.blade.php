@extends('admin.layout') 
@section('titulo', 'SPGWeb - Dashboard')

@section('conteudo')



      <div class="row container ">
          <section class="graficos col s12 m6" >            
            <div class="grafico card z-depth-4">
                <h5 class="center"> Novos Usuarios registrados</h5>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>           
          </section> 
          
          <section class="graficos col s12 m6">            
              <div class="grafico card z-depth-4">
                  <h5 class="center"> Cursos </h5>
              <canvas id="myChart2" width="400" height="200"></canvas> 
          </div>            
         </section>             
      </div>

   


      </div>
      @endsection
      @push('graficos')
      <script>
        /* Gráfico 01 */
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [{{$userAno}}],
        datasets: [{
            label: [{!! $userLabel !!}],
            data: [{{$userTotal}}],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                         
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',                     
                'rgba(255, 159, 64, 1)'
            ],
           borderWidth: 1, 
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

/* Gráfico 02 */
var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [{!!$cursoDateLabel!!}],
        datasets: [{
            label: 'Visitas',
            data: [{{$cursoDateTotal}}],
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',                         
                'rgba(255, 159, 64)',
                'rgba(0, 0, 255, 1)',
                'rgba(127, 255, 0, 1)' 
            ]
        }]
    }
});
      </script>
          
      @endpush