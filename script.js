// const els = {
//     welcomeScreen: null,
//     questionScreen: null,
//     endScreen: null,
//     welcomeBtn: null,
//     answers: null,
//     endBtn: null,
//     answersContainer: null
// };

// let questionIndex = 0;

// const questions = [{
//          question: '1. Avez-vous tendance à procrastiner ? (Tout laisser à la dernière minute)',
//          answers: [{
//            title: 'Jamais',
//             diag: 'Anxiéte',
//         }, {
//            title: 'Rarement',
//            diag: 'Anxiéte',
//         }, {
//            title: 'Souvent',
//            diag: 'TDA/H',
//         }, {
//            title: 'Tout le temps',
//            diag: 'TDA/H',
//         }]
// },    
//    {
//     question: '2. Êtes-vous inquiet à propos de beaucoup de choses à la fois ?',
//     answers: [{
//       title: 'Jamais',
//        diag: 'TDA/H',
//    }, {
//       title: 'Rarement',
//       diag: 'TDA/H',
//    }, {
//       title: 'Souvent',
//       diag: 'Anxiéte',
//    },{
//       title: 'Tout le temps',
//       diag: "d'anxiéte",
//    }]
//    },
   
//    {
//     question: "3. Avez-vous toujours eu des difficultés sociales depuis votre enfance, telles que l'intégration, le maintien du contact visuel et l'initiation des interactions ?",
//     answers: [{
//       title: 'Jamais',
//        diag: 'de rien!',
//    }, {
//       title: 'Rarement',
//       diag: 'de rien!',
//    }, {
//       title: 'Souvent',
//       diag: 'Autisme',
//    },{
//       title: 'Tout le temps',
//       diag: 'Autisme',
//    }]
//    },
//     {
      
//     question: '4. Avez-vous du mal à contrôler quand et en quelle quantité vous mangez ?',
//     answers: [{
//       title: 'Jamais',
//        diag: 'de rien!',
//    }, {
//       title: 'Rarement',
//       diag: 'de rien!',
//    }, {
//       title: 'Souvent',
//       diag: 'Trouble de l alimentation',
//    },{
//       title: 'Tout le temps',
//       diag: 'Trouble de l alimentation',
//    }]
//    },
//    {
//     question: '5. Vous arrive-t-il de vous sentir mal dans votre peau, d avoir l impression d avoir échoué ou d avoir déçu votre famille ?',
//     answers: [{
//       title: 'Jamais',
//        diag: 'de rien!',
//    }, {
//       title: 'Rarement',
//       diag: 'de rien!',
//    }, {
//       title: 'Souvent',
//       diag: 'Depression',
//    },{
//       title: 'Tout le temps',
//       diag: 'Depression',
//    }]
//    },
   
// ];

// const recordedAnswers = [];


// const init = () => {
//     console.log('Page has loaded');

//     els.welcomeScreen = document.querySelector('.welcome-screen');
//     els.questionScreen = document.querySelector('.question-screen');
//     els.endScreen = document.querySelector('.end-screen');
//     els.welcomeBtn = els.welcomeScreen.querySelector('button');
//     els.endBtn = els.endScreen.querySelector('button');
//     els.answersContainer = els.questionScreen.querySelector('ul');



// els.welcomeBtn.addEventListener('click', () =>{
//     displayScreen('question');
//     displayQuestion(questionIndex);
// });

//    els.answersContainer.addEventListener('click', ({target}) => {
//       if (target.tagName !=='LI') {
//           return;
//       }
//       const diag = target.getAttribute('data-diag');
//       recordedAnswers.push(diag);

//       questionIndex++;

//       if(questionIndex >= questions.length) {
//          calculateScore( );
//          displayScreen('end');
       
//       } else {
//         displayQuestion(questionIndex);
//       }

//       displayQuestion(questionIndex);
//    });

// };

// const calculateScore =() => {
//     const diag = recordedAnswers.sort((a, b) => {
//         return recordedAnswers.filter(answer => answer === a).length -
//         recordedAnswers.filter(answer => answer === b).length
//     }).pop();
//     console.log('diag', diag);

//     els.endScreen.querySelector('span').textContent = diag;
// };

// const displayQuestion =(index) => {


//     const currentQuestion = questions [index]; 

//     const questionEl =  els.questionScreen.querySelector('h2');

//     const answerEls = currentQuestion.answers.map((answer) => {
//         const liEl = document.createElement('li');
//         liEl.textContent = answer.title;
//         liEl.setAttribute ('data-diag', answer.diag);
//         return liEl;
//     });
    
//     questionEl.textContent = currentQuestion.question; 
//       els.answersContainer.textContent = '';
//       els.answersContainer.append(...answerEls);
// };

// const displayScreen =(screenName) => {
//     //console.log('screenName', screenName);
//       els.welcomeScreen.style.display = 'none';
//       els.questionScreen.style.display = 'none';
//       els.endScreen.style.display = 'none';

//       const screen = els[screenName + 'Screen'];
//       screen.style.display = 'flex';
// };

// window.addEventListener('load', init);
