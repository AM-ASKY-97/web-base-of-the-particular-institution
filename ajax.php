<script type="text/javascript">
    function loadfiles(fileName, loadArea){

        var request=new XMLHttpRequest();
        request.onreadystatechange = function (){
            if (this.readyState == 4 && this.status == 200){
               document.getElementById(loadArea).innerHTML=this.responseText; 
            } 
        
        };
        request.open("GET",fileName+".php",true);
        request.send();


        if (fileName ==  "Dashbord")
        {
            window.location.href="index.php";
        }

        if (fileName ==  "Lectures")
        {
            
        }

        if (fileName ==  "New student")
        {
            document.getElementById('h1').innerHTML="New student";
        }

        if (fileName ==  "Time Table")
        {
            document.getElementById('h1').innerHTML="Time Table";
        }

        if (fileName ==  "index")
        {
            window.location.href="index.php";
        }
    }
</script>

