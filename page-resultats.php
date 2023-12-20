<link href="<?php echo get_template_directory_uri();?>/page.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php /* Template Name: results Template */ 

get_header();

$recordedAnswers = isset($_GET['answers']) ? $_GET['answers'] : '';
$recordedAnswersArray = explode(',', $recordedAnswers);
?>

<div class="pgresults">
<h1 class="rtitle">Résultats</h1>
<div class="chart-container">
        <canvas id="quizChart" width="400" height="200"></canvas>
    </div>

<h5 class="res">Vos résultats suggèrent que vous souffrez d'un TDA/TDAH.</h5> 
<p>Cependant, ce quiz ne remplace pas un diagnostic approprié d'un professionnel de la santé et nous vous encourageons à prendre rendez-vous avec un de nos médecin dès maintenant en cliquant juste <a href=#>Ici!</a></p>

<div class="container">
  <div class="cardr">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri();?>\assets\img\TDAH.png" class="card-img-top" alt="...">
      </div>
    <div class="col-md-8">
        <div class="body-card">
          <h4 class="title-res">35% TDA/H</h4>
          <p >Le TDAH (Trouble du Déficit de l'Attention avec ou sans Hyperactivité) est un trouble neurodéveloppemental caractérisé par des difficultés à se concentrer, 
            à contrôler les impulsions et à réguler l'activité. Il impacte divers aspects de la vie quotidienne et peut nécessiter un traitement combinant thérapie, soutien éducatif et parfois des médicaments.</p>
          <a href="#" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
const initChart = () => {
    const ctx = document.getElementById('quizChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: questions.map((_, index) => 'Question ' + (index + 1)),
            datasets: [{
                label: 'Quiz Results',
                data: recordedAnswers.map(diag => diag),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };
        const quizChartOptions = {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        };
        new Chart(quizChartCtx, {
            type: 'bar',
            data: quizChartData,
            options: quizChartOptions
        });
    });
};
const urlParams = new URLSearchParams(window.location.search);
const recordedAnswers = urlParams.get('answers').split(',');

</script>


