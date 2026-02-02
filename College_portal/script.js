console.log("hello world");
const collegeName="RGUKT Nuvid";
const userRole="Student";
let studentCount=7000;
let portalStatus="Offline";
document.addEventListener("DOMContentLoaded",function(){
    document.getElementById("collegeName").innerText=collegeName;
    document.getElementById("userRole").innerText=userRole;
});
const updatePortal=()=>{
    studentCount=studentCount+10;
    portalStatus="Online";
    // collegeName="IIIT";  # gives typeerror :assignment to const
    // document.getElementById("collegeName").innerText=collegeName;
    document.getElementById("studentCount").innerText=studentCount;
    document.getElementById("portalStatus").innerText=portalStatus;
    console.log("studentCount:",studentCount);
    console.log("portalStatus",portalStatus);
};
var navLinks=document.getElementById('nav-links');
function hideMenu(){
    navLinks.style.right="-200px"
}
function showMenu(){
    navLinks.style.right="0px";
}
console.log("College Name:",collegeName);

const contactForm=document.getElementById("contactForm");
contactForm.addEventListener("submit",function(e){
    e.preventDefault();
    const name=contactForm.name.value.trim();
    const email=contactForm.email.value.trim();
    const subject=contactForm.subject.value.trim();
    const message=contactForm.message.value.trim();
    if(!email.includes("@")){
        alert("please enter a valld email");
        return;
    }
    if(name===""||email===""||subject===""||message===""){
        alert("please fill all the details");
        return;
    }
    alert(`Thanks ${name} ,your message has been sent!`);
    contactForm.reset();
});

//objects
let CollegePortal={
    name:"RGUKT Nuzvid",
    userRole:"Student",
    activeStudents:7000,
    portalStatus:"Offline"
};
const collegeNameElem = document.getElementById("collegeName");
const userRoleElem = document.getElementById("userRole");
const studentCountElem = document.getElementById("studentCount");
const portalStatusElem = document.getElementById("portalStatus");


collegeNameElem.innerText = CollegePortal.name;
userRoleElem.innerText = CollegePortal.userRole;

studentCountElem.innerText = CollegePortal["activeStudents"];
portalStatusElem.innerText = CollegePortal["portalStatus"];

// function expression
// const greet=function(){
//     console.log("hello welcome to RGUKT");
// };
// greet();

// // arrow func
// const greet=()=>{
//     console.log("hello welcome to rgukt");
// }

// // arrow func with parameters
// const subract=(a,b)=>{
//     console.log(a-b);
// };
// function add(a,b){

// }

// // function expression with parameters
// const multiply=function(x,y){
//     console.log(x*y);
// }
// multiply(4,3);

