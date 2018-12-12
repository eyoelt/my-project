<html>
	<head>
		<title>
		</title>
	</head>

<body>
		<script language="JavaScript">
              if (document.all||document.getElementById)
         document.write('<span id="worldclock" style="font: 20px time new roman;fontcolor:white;"></span><br>')

             zone=0;
       isitlocal=true;
           ampm='';

        function updateclock(z){
              zone=z.options[z.selectedIndex].value;
            isitlocal=(z.options[0].selected)?true:false;
        }

    function WorldClock(){
            now=new Date();
              ofst=now.getTimezoneOffset()/60;
          secs=now.getSeconds();
            sec=-1.57+Math.PI*secs/30;
            mins=now.getMinutes();
       min=-1.57+Math.PI*mins/30;
           hr=(isitlocal)?now.getHours():(now.getHours() + parseInt(ofst)) + parseInt(zone);
            hrs=-1.575+Math.PI*hr/6+Math.PI*parseInt(now.getMinutes())/360;
        if (hr < 0) hr+=24;
               if (hr > 23) hr-=24;
          ampm = (hr > 11)?"ጥዋት":"ማታ";
             statusampm = ampm.toLowerCase();

      hr2 = hr;
     if (hr2 == 0) hr2=12;
         (hr2 < 13)?hr2:hr2 %= 12;
        if (hr2<10) hr2="0"+hr2

          var finaltime=hr2+':'+((mins < 10)?"0"+mins:mins)+':'+((secs < 10)?"0"+secs:secs)+' '+statusampm;

          if (document.all)
           worldclock.innerHTML=finaltime
           else if (document.getElementById)
       document.getElementById("worldclock").innerHTML=finaltime
           else if (document.layers){
         document.worldclockns.document.worldclockns2.document.write(finaltime)
       document.worldclockns.document.worldclockns2.document.close()
      }
      setTimeout('WorldClock()',1000);
    }
		window.onload=WorldClock
          //-->
		days = new Array(7)
		days[1] = "እሁድ";
		days[2] = "ሰኞ";
		days[3] = "ማክሰኞ"; 
		days[4] = "ረቡዕ";
		days[5] = "ሐሙስ";
		days[6] = "አርብ";
		days[7] = "ቅዳሜ";
		months = new Array(12)
		months[1] = "ጥር";
		months[2] = "የካቲት";
		months[3] = "መጋቢት";
		months[4] = "ሚያዝያ";
		months[5] = "ግንቦት";
		months[6] = "ሰኔ";
		months[7] = "ሐምሌ";
		months[8] = "ነሃሴ";
		months[9] = "መስከረም";
		months[10] = "ጥቅምት"; 
		months[11] = "ህዳር";
		months[12] = "ታህሳስ";
		today = new Date(); day = days[today.getDay() + 1]
		month = months[today.getMonth() + 1]
		date = today.getDate()
		year=today.getYear(); 
		if (year < 2000)
		year = year + 1900;
		document.write ("<font size=-1 face='times new roman' color=white> "+ day +
		", " + month + " " + date + ", " + year + "</font>")
		</script>
		</body>
		</html>