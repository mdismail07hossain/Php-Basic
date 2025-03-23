const arr = ["MdHossain"];
const reuslt = arr.map((str) => str.trim().split("").reverse().join(""));
console.log(reuslt);
const arr2 = ["MdHossain"];
const result = arr2.map((str) => str.trim().split("").reverse().join(""));
console.log(result);

const number = 5;
var count = 0;
if (number <= 1) {
  return "consaltan number";
} else {
  for (let i = 2; i < number; i++) {
    if (number % i === 0) {
      count++;
      break;
    }
  }
}
if (count == 0) {
  console.log(`number is Prime`);
} else {
  console.log(`number is not a Prime number`);
}
