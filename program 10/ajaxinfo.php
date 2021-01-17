 $('#tableRow').append(content);
 }
 });
 },
 };
 $(document).ready(function () {
 tempData.getRecord();
 });
 </script>
 <body>
 <center>
 <h1> Add Student Record </h1> <form id="formRecord">
 <table border="0"> <tr>
 <td>Name</td>
 <td><input type="text" name="name" id="name"></td> </tr>
 <tr>
 <td>Mobile Number</td>
 <td><input type="number" name="mobile" id="mobile"></td> </tr>
 <tr>
 <td>Email ID</td>
 <td><input type="email" name="email" id="email"></td> </tr>
 </table><br>
 <button type="button" onclick="tempData.saveRecord();" style="width:150px;">Add
Student</button>
 </form>
 <br/><br/>
 <div style="overflow-x: scroll;height: 600px;width:60%;">
 <button type="button" style="width:150px;float: right;" onclick="tempData.selectionSort();" >
Selection Sort</button>
 <br/><br/>
 <table border=1 style="width:100%;"> <thead>
 <tr style="text-align: left;"> <th>Student ID</th> <th>Name</th> <th>Mobile</th>
<th>Email</th>
 </tr>
 </thead>
 <tbody id="tableRow"> </tbody>
 </table>
 </div>
 </center>
</body>
</html>
