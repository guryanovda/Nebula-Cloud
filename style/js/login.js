var doc_w = $(document).width();
doc_w = doc_w/2;
doc_w = doc_w-50;
document.getElementById('logo').style.right = doc_w + 'px';
doc_w = doc_w-50;
document.getElementById('hours').style.right = doc_w + 'px';
obj_hours=document.getElementById("hours");
doc_w = doc_w+210;
document.getElementById('week').style.left = doc_w + 'px';
obj_week=document.getElementById("week");
document.getElementById('data').style.left = doc_w + 'px';
doc_w = doc_w-340;
document.getElementById('arrow').style.right = doc_w + 'px';
document.getElementById('loginform').style.right = doc_w + 'px';
obj_day=document.getElementById("day");
obj_month=document.getElementById("month");
name_month=new Array ("Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря");
name_day=new Array ("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота");

function wr_hours()
{
    time=new Date();

    time_min=time.getMinutes();
    time_hours=time.getHours();
    time_wr=((time_hours<10)?"0":"")+time_hours;
    time_wr+=":";
    time_wr+=((time_min<10)?"0":"")+time_min;
    obj_hours.innerHTML=time_wr;
    obj_week.innerHTML=name_day[time.getDay()];
    obj_day.innerHTML=time.getDate()+' ';
    obj_month.innerHTML=name_month[time.getMonth()];
    time_wr=""+name_day[time.getDay()]+time.getDate()+name_month[time.getMonth()]+" "+time.getFullYear()+""+time_wr;
}

wr_hours();
setInterval("wr_hours();",1000);