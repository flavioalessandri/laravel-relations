require('./bootstrap');


document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM completamente caricato e analizzato');

    var nextButton = document.getElementById('next')

    nextButton.addEventListener("click", nextTask);



});

function nextTask(){
  // var taskList= document.getElementById('tasks-carousel');
  var list= document.getElementsByClassName('tasks-container').[0].children;
  console.log(list.length);



  // var list = taskList.querySelector('.tasks-container').children;
  //
  // var li = taskList.getElementsByTagName('LI');
  // console.log(li.length);
  //
  var active = document.getElementsByClassName('show');
  //
  var next = active.[0].nextElementSibling;
  var prev = active.[0].previousElementSibling;

  for (let i = 0; i < list.length; i++) {

    if (active.[0].dataset['data-carousel'] !== ('"'+ list.length+'"')) {

      console.log(list[i].dataset['data-carousel'], "data");

    list[i].classList.remove('show');
    list[i].classList.add('hidden');
    console.log(list[i].className);

    console.log("elemento next", next);

    next.classList.add('show');
    next.classList.remove('hidden');
  } else{

    document.getElementById('next').classList.add('hidden');
  }
}






  // var active = list.className('show');


  // console.log("active",active,list);
  // console.log("dibling",next);
  // if(active.dataset.parent == 1){
  //
  // }
  //


}
