require('./bootstrap');


document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM completamente caricato e analizzato');

    var nextButton = document.getElementById('next');
    var prevButton = document.getElementById('prev');
    nextButton.addEventListener("click", nextTask);
    prevButton.addEventListener("click", prevTask);

});

function prevTask(){

  var prevButton = document.getElementById('prev');
  var nextButton = document.getElementById('next');

  nextButton.classList.remove('hidden');

  var list= document.getElementsByClassName('tasks-container').[0].children;
  var active = document.querySelector('.show');
  var prev = active.previousElementSibling;
  var listLeng = list.length;

  if (active.getAttribute('data-carousel') !== "1" ) {

    active.classList.remove('show');
    active.classList.add('hidden');

    prev.classList.add('show');
    prev.classList.remove('hidden');

  } else{
    prevButton.classList.add('hidden');
  }

}


function nextTask(){
  var prevButton = document.getElementById('prev');
  var nextButton = document.getElementById('next');

  prevButton.classList.remove('hidden');

  var list= document.getElementsByClassName('tasks-container').[0].children;
  var active = document.querySelector('.show');
  var next = active.nextElementSibling;
  var listLeng = list.length;

  if (active.getAttribute('data-carousel') !== listLeng.toString() ) {

    active.classList.remove('show');
    active.classList.add('hidden');

    next.classList.add('show');
    next.classList.remove('hidden');

  } else{
    nextButton.classList.add('hidden');
  }
}
