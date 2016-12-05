window.onload=function()
{
    var httpRequest;
    var sb=document.querySelectorAll(".msg");
    for (var i=0;i<sb.length;i++)
    {
        sb[i].addEventListener("click",function()
        {
            httpRequest = new XMLHttpRequest();
            var url="https://cheapomail-final-cami-cee.c9users.io/inbox.php?msg=";
            httpRequest.onreadystatechange = View;
            httpRequest.open('GET', url + encodeURIComponent(this.value));
            httpRequest.send();
            //alert("ok");
            //alert(this.value);
            return false;
        });
     }
       
     function View()
     {
           if (httpRequest.readyState === XMLHttpRequest.DONE) 
           {
                if (httpRequest.status === 200) 
                {
                    //alert("ok");
                    //alert(httpRequest.responseText);
                    var result = document.getElementById('result');
                    var response = httpRequest.responseText;
                    result.innerHTML=response;
                } 
                else 
                {
                    alert('There was a problem with the request.');
                }
           }
           else
           {
              //alert("no");
           }
      }
  
}