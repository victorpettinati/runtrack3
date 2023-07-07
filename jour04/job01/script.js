document.getElementById('button').addEventListener('click', fetchExpression);

function fetchExpression() {
  fetch('expression.txt')
    .then(response => response.text())
    .then(data => {
      const expressionElement = document.getElementById('expression');
      expressionElement.textContent = data;
    })
    .catch(error => console.log('Une erreur s\'est produite :', error));
}
