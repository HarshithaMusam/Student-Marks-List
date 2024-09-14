<html>
<head>
   <h1 class="hi"> STUDENT MARKS STATEMENT</h1>
<script>
    function cal(){
         var a=parseInt(document.getElementById("Marks1").value);
         var b=parseInt(document.getElementById("Marks2").value);
         var c=parseInt(document.getElementById("Marks3").value);
         var d=document.getElementById("Total").value;
          d=a+b+c;
         e=d/3;
      document.getElementById("Total").value=d;
       document.getElementById("Average").value=e;
         if ((a>30 && b>30) && c>30){
            document.getElementById("Result").value="pass";
        }
         else{
            document.getElementById("Result").value="fail";
         }
        if (e>80){
            document.getElementById("Division").value="distinction";
        }
        else if(e<80 && e>=70){
            document.getElementById("Division").value="firstclass";
        }
        else if(e<70 && e>=60){
            document.getElementById("Division").value="secondclass";
        }
        else{
            document.getElementById("Division").value="thirdclass";
        }       
    }
</script>
</head>
<style>
.hi{
margin-left:100px;
}
.hii{
margin-left:300px;
}
.hiii{
font-weight:bold;
}
.hiiii{
margin-left:300px;
}
</style>
<body>
  <form action="register.php" method="post">
       <label>RegdNo:</label>
      <input type="text" id="RegdNo"  name="RegdNo"required >&nbsp&nbsp
       <label>Name:&nbsp&nbsp&nbsp</label>
        <input type="text" id="Name" name="Name" required ><br><br>
        <label>Marks1:&nbsp</label>
        <input type="number" id="Marks1" name="Marks1" required >&nbsp&nbsp
         <label>Marks2:</label>
        <input type="number" id="Marks2" name="Marks2" required >&nbsp&nbsp
         <label>Marks3:</label>
         <input  type="number" id="Marks3"  name="Marks3" required ><br><br>
	<button  onclick="cal()" class="hiiii">calculate</button><br><br>
         <label>Total:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="number" id="Total"  name="Total" required>&nbsp&nbsp
         <label>Average:</label>
         <input type="text"  id="Average" name="Average" required><br><br>
        <label>Result:&nbsp&nbsp&nbsp</label>
         <input type="text" id="Result"  name="Result" required>&nbsp
         <label>Division:</label>
         <input type="text" id="Division" name="Division"><br><br>
           <input type="submit" value="Submit" name="submit" class="hii">
   <p class="hiii">Note:All fields are required</p>
  </form>
</body>
</html>