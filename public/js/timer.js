function odliczanie()
{
var dzisiaj = new Date();

var dzien = dzisiaj.getDate();
var miesiac = dzisiaj.getMonth()+1;
var rok = dzisiaj.getFullYear();
var godzina = dzisiaj.getHours();
var minuta = dzisiaj.getMinutes();
var sekunda = dzisiaj.getSeconds();

if(sekunda<10) sekunda="0"+sekunda;

if(minuta<10) minuta="0"+minuta;

if(godzina<10) godzina="0"+godzina;


document.getElementById("zegar").innerHTML = dzien+"/"+
    miesiac+"/"+rok +"|"+godzina+":"+minuta+":"+sekunda;

 setTimeout("odliczanie()",1000);

}