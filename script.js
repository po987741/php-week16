//let name = 'Tarzan';
let year = 2540;
console.log("คุณอยู่ GEN ไหน");
document.getElementById("hContent").innerHTML="คุณอยู่ GEN ไหน";
if(year>=2489 && year<=2507){
    console.log('Baby Boomer');
    document.getElementById("hContent2").innerHTML='Baby Boomer'; 
}
else if(year>=2508 && year<2522){
    console.log('Gen X');
    document.getElementById("hContent2").innerHTML='Gen X'; 
}
else if(year>=2523 && year<2540){
    console.log('Gen Y');
    document.getElementById("hContent2").innerHTML='Gen Y'; 
}
else if(year>=2540){
    console.log('Gen Z');
    document.getElementById("hContent2").innerHTML='Gen Z'; 
}
else{
    console.log('ERROR');
    document.getElementById("hContent2").innerHTML='ERROR'; 
}

<script src="script.js"></script>