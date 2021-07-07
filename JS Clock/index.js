setInterval(() => {
  let  d = new Date();
   let htime = d.getHours();
   let mtime = d.getMinutes();
   let stime = d.getSeconds();
    
                                           // hrotation = 30*htime + mtime/2;
                                          // mrotation = 6*mtime;
                                         // srotation = 6*stime;
    
    hr.style.transform = `rotate(${30*htime + mtime/2 + stime/120}deg)`;
    min.style.transform = `rotate(${6*mtime + stime/10}deg)`;
    sec.style.transform = `rotate(${6*stime}deg)`;

    // Digital Clock 
    // var ampm = (htime >= 12) ? ' PM' : ' AM';
    // htime = htime % 12; // for 12 hours time
    // We use <10 for add zero with a number that will be lower than 10
    // htime = (htime < 10) ? "0" + htime : htime;
    // mtime = (mtime < 10) ? "0" + mtime : mtime;
    // stime = (stime < 10) ? "0" + stime : stime;
    // Alternative
    document.getElementById('text').innerHTML =  d.toLocaleTimeString(); 
},1000);




