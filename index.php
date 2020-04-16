<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Computer Science Class Registration</title>


    
<style>
body {
  background-color: tan;
  padding-bottom: 80px;
} 

</style>

</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <h1 class="text-center">Computer Science Class Registration</h1>

<br><br>

<form method="POST" action="process.php" enctype="multipart/form-data">
<div class="input-group mb-3">
        <span class="input-group-text">Your Name</span>
             <input type="text" name="firstname" class="form-control" placeholder="First Name">
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Email</span>
            <input type="email" name="email" class="form-control" id="inputEmail">
        <span class="input-group-text">Phone</span>
            <input type="text" name="phone" class="form-control" id="phone">
    </div>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Address 1</span>
    </div>
    <input type="text" name="address1" class="form-control">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
       <span class="input-group-text">Address 2</span>
    </div>
    <input type="text" name="address2" class="form-control">
</div>
 
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">City</span>
            <input type="text" class="form-control" id="inputCity">
        <span class="input-group-text">State</span>
            <select id="inputState" name="state" class="form-control">
            <option selected>Choose...</option>
            <option value="AL">Alabama</option> 
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <span class="input-group-text">Zip Code</span>
        <input type="text" name="postalcode" class="form-control" id="inputZipcode">
        </div>
    </div>
</div>
<div class="container">
    
    <label class="form-check-inline" for="male">
    Gender: &nbsp;
        <input type="radio" class="form-check-input" id="male" name="gender" value="male">Male
    </label>
            <div class="form-check-inline">
                <label class="form-check-label" for="female">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">Female
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="other">
                    <input type="radio" class="form-check-input" id="other" name="gender" value="other">Other
                </label>
            </div>        
        </div>
    </div>                         
</div>                        
        
                
<!-- upload picture -->
<div class="container">
    Select image to upload:
    <input type="file" name="picture" id="fileToUpload">
</div>
<br><br>

<!-- class schedules -->
<div class="container">
  <h2>Courses</h2>
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th></th>
        <th>Course Name</th>
        <th>Course Number</th>
        <th>Course Level</th>
        <th>Tuition</th>
        <th>Days</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Instructor</th>
        <th>Credits</th>
        <th>Published</th>
      </tr>
    </thead>
</div>  


<?
$servername = "localhost";
$username = "sarahbethd";
$password = "Meadows862!";
$dbname = "jaxcode47";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM college_courses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

<tr>
        <td><input type="checkbox" name="courseid[]" value="<?=$row['courseid']?>"></td>
        <td><?=$row['coursename']?></td>
        <td><?=$row['coursenumber']?></td>
        <td><?=$row['courselevel']?></td>
        <td><?=$row['tuition']?></td>
        <td><?=$row['days']?></td>
        <td><?=$row['starttime']?></td>
        <td><?=$row['endtime']?></td>
        <td><?=$row['instructor']?></td>
        <td><?=$row['credits']?></td>
        <td><?=$row['published']?></td>
</tr>
         
<?
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
     
     </tbody>
    </table>
</div>    
     
<div class="container"> 
            <div class="form-group">
            <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
</div>

    
<!-- I agree -->
<div class="container">
    <input type="checkbox" id="verified" name="verified" value="verified">
        <label for="checkbox">I have verified my information</label><br><br>
            <input type="submit" value="Submit">
</div>

 






</form>


    </div>



    </div>


    </div>
    
</body>
</html>