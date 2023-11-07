console.log("Hello, World!");
let name="sara";
{
    let name="peter";
    console.log(name);
}
    console.log(name);
let x =function(x,y){
    return x*y;
}
class person{
constructor (name)
{
    this.name=name;
}
}
const person1 =new person('jhon');
console.log(person1.name);
function sum(x,y=5){
console.log(x+y);
}
sum(5);
sum(5,10);
const firstname ="shahid";
const lastname = "ramlan";
console .log ("hello"+ firstname +''+lastname);

const person2={
    names:"sara",
    age:20,
    gender:"female"

 }
let {names,age,gender} = person2;
console.log(name);
console.log(age);
console.log(gender);



