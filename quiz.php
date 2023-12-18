<!-- <?php /* Template Name: Quiz Template */ ?>

<!DOCTYPE html>
<html>
<head> 
    <title> Quiz GenZen</title>
    <div id="quiz-container">
<a href="<?php echo esc_url(home_url('localhost/GenZen/about/')); ?>" rel="home">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Logo.png" alt="Logo">
    </a>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>\quiz.css">

    <lik href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head> 
<body>
  <div class="welcome-screen">
    <h1>Bienvenue au quiz de GenZen</h1>
    <h3>Evaluez votre état de santé mentale avec notre quiz crée par et pour les jeunes ! </h3>
    <button id="start">Démarrer le test</button>
</div>

<div class="question-screen">
  <div class="app"> 
  <h2> 1. Avez-vous tendance à procrastiner ? (Tout laisser à la dernière minute)</h2>
  <div class="reponse">
  <ul>
      <li>Jamais</li>
      <li>Rarement</li>
      <li>Souvent</li>
      <li>Tout le temps</li>
  </ul>
</div>
  </div>
</div>

<div class="end-screen">
  <h1>Merci d'avoir repondu au questions pour retrouver vos resultats inscrivez vous ici!</h1>
  <p class="diag">Vos résultats suggèrent que vous souffrez <span>d'un TDA/TDAH</span></p>
  <button id="resultats">Resultats</button>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
</body>
</html> 

 -->


 <?php
/* Template Name: Quiz Template */

$query = new WP_Query(array('post_type' => 'quiz_question'));

$questions = array();

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        $question = array(
            'question' => get_the_title(),
            'answers' => array()
        );

        // Parse answers from content
        $answers_raw = get_the_content();
        $answers_lines = explode("\n", $answers_raw);

        foreach ($answers_lines as $line) {
            $parts = explode(', ', $line);
            if (count($parts) === 2) {
                $question['answers'][] = array(
                    'title' => $parts[0],
                    'diag' => $parts[1]
                );
            }
        }

        $questions[] = $question;
    }
}

wp_reset_postdata();
?>

<!DOCTYPE html>
<html>
<head>
   <title> Quiz GenZen</title>
    <div id="quiz-container">
<a href="<?php echo esc_url(home_url('localhost/GenZen/about/')); ?>" rel="home">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Logo.png" alt="Logo">
    </a>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>\quiz.css">

    <lik href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <!-- Your existing HTML content here -->
    <div class="welcome-screen">
    <h1>Bienvenue au quiz de GenZen</h1>
    <h3>Evaluez votre état de santé mentale avec notre quiz crée par et pour les jeunes ! </h3>
    <button id="start">Démarrer le test</button>
    <p> Lorsque vous répondez aux questions ci-dessus, réfléchissez à la façon dont elles se sont appliquées à vous au cours des six derniers mois environ. Ce test vous indiquera si vous présentez les symptômes les plus courants du TDAH, mais il ne peut remplacer une évaluation complète.</p>
</div>

    <div class="question-screen">
        <div class="app"> 
            <h2><?php echo $questions[$questionIndex]['question']; ?></h2>
            <div class="reponse">
                <ul>
                    <?php foreach ($questions[$questionIndex]['answers'] as $answer) : ?>
                        <li data-diag="<?php echo $answer['diag']; ?>"><?php echo $answer['title']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Your existing HTML content here -->
    <div class="end-screen">
  <h1>Merci d'avoir repondu a nos questions! <br> Pour découvrir vos résultats en détail , inscrivez-vous ici </h1>
  <p class="diag">Vos résultats suggèrent que vous <span> avez possiblement un TDA/TDAH</span></p>
  <button id="resultats">Resultats</button>


    <script>
        const questions = <?php echo json_encode($questions); ?>;
        // Your existing JavaScript code here
        const els = {
    welcomeScreen: null,
    questionScreen: null,
    endScreen: null,
    welcomeBtn: null,
    answers: null,
    endBtn: null,
    answersContainer: null
};

let questionIndex = 0;

const recordedAnswers = [];

const init = () => {
    console.log('Page has loaded');

    els.welcomeScreen = document.querySelector('.welcome-screen');
    els.questionScreen = document.querySelector('.question-screen');
    els.endScreen = document.querySelector('.end-screen');
    els.welcomeBtn = els.welcomeScreen.querySelector('button');
    els.endBtn = els.endScreen.querySelector('button');
    els.answersContainer = els.questionScreen.querySelector('ul');

    els.welcomeBtn.addEventListener('click', () => {
        displayScreen('question');
        displayQuestion(questionIndex);
    });

    els.answersContainer.addEventListener('click', ({ target }) => {
        if (target.tagName !== 'LI') {
            return;
        }
        const diag = target.getAttribute('data-diag');
        recordedAnswers.push(diag);

        questionIndex++;

        if (questionIndex >= questions.length) {
            calculateScore();
            displayScreen('end');
        } else {
            displayQuestion(questionIndex);
        }
    });
};

const calculateScore = () => {
    const diag = recordedAnswers.sort((a, b) => {
        return recordedAnswers.filter(answer => answer === a).length -
            recordedAnswers.filter(answer => answer === b).length;
    }).pop();
    console.log('diag', diag);

    // You can customize the score calculation logic based on your requirements
    els.endScreen.querySelector('span').textContent = diag;
};

const displayQuestion = (index) => {
    const currentQuestion = questions[index];

    const questionEl = els.questionScreen.querySelector('h2');

    const answerEls = currentQuestion.answers.map((answer) => {
        const liEl = document.createElement('li');
        liEl.textContent = answer.title;
        liEl.setAttribute('data-diag', answer.diag);
        return liEl;
    });

    questionEl.textContent = currentQuestion.question;
    els.answersContainer.textContent = '';
    els.answersContainer.append(...answerEls);
};

const displayScreen = (screenName) => {
    els.welcomeScreen.style.display = 'none';
    els.questionScreen.style.display = 'none';
    els.endScreen.style.display = 'none';

    const screen = els[screenName + 'Screen'];
    screen.style.display = 'flex';
};

window.addEventListener('load', init);

    </script>
</body>
</html>
