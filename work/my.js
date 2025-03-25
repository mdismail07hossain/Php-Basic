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

// Array Slice (অপরিবর্তনীয়)
// Slice একটি Array-এর অংশ কেটে নেয় (কিন্তু মূল Array-কে পরিবর্তন করে না)।
// সিনট্যাক্স: array.slice(startIndex, endIndex)
// উদাহরণ:
let fruits = ["Apple", "Banana", "Mango", "Orange", "Lichi"];
let slicedFruits = fruits.slice(1, 4); // Index 1 থেকে 3 পর্যন্ত নেবে (4 নয়)
console.log(slicedFruits); // ["Banana", "Mango", "Orange"]
console.log(fruits); // মূল Array অপরিবর্তিত ["Apple", "Banana", "Mango", "Orange", "Lichi"]
// Array Splice (পরিবর্তনশীল)
// Splice Array-এর অংশ কেটে বাদ দেয় বা নতুন Element যোগ করে (মূল Array পরিবর্তন করে)।
// সিনট্যাক্স: array.splice(startIndex, deleteCount, newItems...)
// উদাহরণ:
let fruits1 = ["Apple", "Banana", "Mango", "Orange"];
let removed = fruits1.splice(1, 2, "Pineapple", "Grapes"); // Index 1 থেকে 2 টা Element মুছে নতুন যোগ করবে
console.log(removed); // ["Banana", "Mango"] (মুছে ফেলা Elements)
console.log(fruits1); // ["Apple", "Pineapple", "Grapes", "Orange"] (পরিবর্তিত Array)
