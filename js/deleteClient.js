
var btnDelete=document.getElementById('btnDelete');
var txtErrorInfo=document.getElementById('errorInfo');
var txtIdClient=document.getElementById('txtIdClient');

var idClient=txtIdClient.value;

alert(idClient);
console.log(idClient);



function funk(){
alert("idClient");


// idClient.style.visibility="visible";
// idClient.value+=idClient.value;
}

//
// xhr = new XMLHttpRequest();
//
// xhr.onreadystatechange() = function(){
//   if(xhr.readyState==4){
// var rep = xhr.responseText;
//
// if(rep){}
//
//       }
// }
//
// xhr.open("GET","deleteClient.php?idClient="+idClient,true);
// xhr.send(null);
//
//


//
//
//
// var affiche = function aff(rep){
//   if(rep){
//     // location="listClient.php";
//     txtErrorInfo.style.visibility="visible";
//   }
//   else{
//     txtErrorInfo.style.visibility="visible";
//   }
// }


btnDelete.addEventListener("click", funk);
