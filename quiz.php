
<?php
/* Template Name: Quiz Template */

$query = new WP_Query(array('post_type' => 'quiz_question'));

$questions = array();
$questionIndex = 0;

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
        //var_dump($answers_lines);

        foreach ($answers_lines as $line) {
            $parts = explode(', ', $line);
           if (strlen($parts[0]) > 1) {
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


    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>\quiz.css">
    <lik href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <!-- Your existing HTML content here -->
    <div class="welcome-screen">
    <h1 class="text-center">Bienvenue au quiz de GenZen</h1>
    <h3 class="text-center">Évaluez votre état de santé mentale avec notre quiz créé par et pour les jeunes !</h3>
    <button id="start" class="btn btn-primary btn-lg btn-block">Démarrer le test</button>
    <p class="text-center">Lorsque vous répondez aux questions ci-dessus, réfléchissez à la façon dont elles se sont appliquées à vous au cours des six derniers mois environ. Ce test vous indiquera si vous présentez les symptômes les plus courants du TDAH, mais il ne peut remplacer une évaluation complète.</p>
</div>


    <div class="question-screen">
        <div class="app"> 
                  <!-- Question number title -->
        <h4>Question <span id='nbrslide'><?php echo $questionIndex +1;?></span>/<?php echo count($questions); ?></h4>
            <h2><?= htmlentities($questions[$questionIndex]['question']); ?></h2>
            <div class="reponse">
                <ul>
                    <?php foreach ($questions[$questionIndex]['answers'] as $answer) : ?>
                        <li data-diag="<?php echo $answer['diag']; ?>"><?php echo $answer['title']; ?></li>
                    <?php endforeach; ?>
                </ul>
                
<button id="previous"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
  <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
</svg></button>

            </div>
            <div class="progress-bar">
    <div class="progress" style="width: 0%;"></div>
            </div>
            </div>
            </div>
            </div>
    

    <!-- Your existing HTML content here -->
<!-- Votre code HTML existant... -->

<div class="end-screen">
    <h1>Merci d'avoir répondu à nos questions! <br> Pour découvrir vos résultats en détail, inscrivez-vous ici </h1>
    <h6 class="diag">Vos résultats suggèrent que vous <br><span> de TDA/H</span></h6>

    <?php if (is_user_logged_in()) : ?>
        <a href="https://genzen.emu.isfsc.be/resultats/"> <button id="resultats">Résultats</button></a>
    <?php else : ?>
        <a href="https://genzen.emu.isfsc.be/connexion/"> <button id="resultats">Connectez-vous pour voir les résultats</button></a>

    <?php endif; ?>
</div>

<!-- Votre code JavaScript existant... -->


  
    <script>
        const questions = <?php echo json_encode($questions); ?>;
        console.log({ questions })
        
const els = {
    welcomeScreen: null,
    questionScreen: null,
    endScreen: null,
    welcomeBtn: null,
    answers: null,
    endBtn: null,
    answersContainer: null,
    progressBar: null,
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
    els.progressBar = document.querySelector('.progress-bar .progress');

    els.welcomeBtn.addEventListener('click', () => {
        displayQuestion(questionIndex);
        displayScreen('question');
        
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
    const previousBtn = document.getElementById('previous');
    previousBtn.addEventListener('click', () => {
        if (questionIndex > 0) {
            questionIndex--;
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
        console.log({answer})
        const liEl = document.createElement('li');
        liEl.textContent = answer.title;
        liEl.setAttribute('data-diag', answer.diag);
        return liEl;
    });

    questionEl.innerHTML = currentQuestion.question;
    els.answersContainer.textContent = '';
    els.answersContainer.append(...answerEls);
    const nbrslide=document.getElementById('nbrslide');
    nbrslide.innerHTML=index +1;

const progressPercentage = ((index + 1) / questions.length) * 100;
els.progressBar.style.width = progressPercentage + '%';
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