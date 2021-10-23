<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>database</title>
</head>
<body>
  <form method="post" autocomplete="off" name="google-sheet">
  	<center><br><br>
         <h1>Registration Form</h1><br>
         <table border="5">	
            
             <tr><td><b>Name : </b></td>
             <td><input type="text" name="Name"   required="" /></td>
            </tr>
            <tr><td><b>Email : </b></td>
            <td><input type="text" name="Email"   required="" /></td>
            </tr>
            <tr><td><b>Phone : </b></td>
            <td><input type="number" name="Phone"   required="" /></td>
            </tr>
            <tr><td><b>Gender : </b></td>
             <td><input type="radio"  name="Gender" value="male" >male
            <input type="radio"  name="Gender" value="female"  >female<br/></td>
             </tr>
           
         </table>
         <br><br>
         <input type="submit" name="submit" value="Submit"/>
    </center>
  </form>

  <script type="text/javascript">


	  const scriptURL = 'https://script.google.com/macros/s/AKfycbxEf3biJyFcKDBPpq4zQGtF3JM2zRZhc2DO4ZjCnrAVMu9oUyqhZlxU1ckaMe6xoRzNSA/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("You have successfully submitted."))
                .catch(error => console.error('Error!', error.message))
            })
  </script>
</body>
</html>