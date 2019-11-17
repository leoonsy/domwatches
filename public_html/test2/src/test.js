
function sayHi(user) {
  alert(`Hello, ${user}!`);
}

function sayBye(user) {
  alert(`Bye, ${user}!`);
  (() => alert(2))();
}

export { sayHi, sayBye }; // список экспортируемых переменных