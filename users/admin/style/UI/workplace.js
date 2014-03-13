// JavaScript Document
function clear_field(){
document.catcher.catcher_field.value="";
}
function getitback(){
document.catcher.catcher_field.value="Введите фразу для поиска";
}
function search(){
new _nfWnd('','Результаты поиска','{width:268,height:500,close:1,resize:0,alert:1,top:27,move:0,left:1000}','Тут будут выводиться результаты поиска. Ваш запрос: '+document.catcher.catcher_field.value);
}