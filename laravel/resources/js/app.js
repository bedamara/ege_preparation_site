require('./bootstrap');

const textInputs = [...document.querySelectorAll(`.form__text`)];

const addFilled = (element) => {
    if (element.value) {
        element.classList.add('form__text--filled')
    } else {
        element.classList.remove('form__text--filled')
    }
};
console.log(textInputs);
if (textInputs) {
    console.log('works 1')
    textInputs.map((element) => {
        addFilled(element)
        element.addEventListener('change', () => {
            addFilled(element);
        })
    });
}
