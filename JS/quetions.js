(function(){
    const titleQuestions = document.querySelectorAll(".quetions_title");

    titleQuestions.forEach(question =>{
        question.addEventListener('click',()=>{
            const arrow = question.querySelector('.quetions_arrow');
            arrow.classList.toggle('quetions_arrow--rotate');

            const answer = question.nextElementSibling;
            
            if (answer.style.height === '0px' || !answer.style.height) {
                answer.style.height = `${answer.scrollHeight}px`;
                answer.classList.add('show'); 
            } else {
                answer.style.height = '0px';
                answer.classList.remove('show'); 
            }
        });
    });
})();
