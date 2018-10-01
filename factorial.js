
//Factorial non-negative integer in JavaScript

const factorial = (n) =>{

    const integers = [];

   //handle wrong input 
   if(n < 0 || typeof n != 'number') {
      console.log('wrong parameter for \'n\' ');
      return NaN;
   }
      
  //loop to generate integers
  while(n > 0){
        integers.push(n);
      n--;
  }

// Using Array.reduce to calculate factorial n!

return integers.reduce((total,current)=>{

      return total * current;

},1);

}

console.log(factorial(6));
console.log(factorial(4));
console.log(factorial('4!'));