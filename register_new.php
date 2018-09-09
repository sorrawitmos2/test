<!DOCTYPE html>
<html lang="th">
<head>
  <title>Runforตุ๊ดตู่</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #00CCCC;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 20%;
    height: 600px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 80%;
    background-color: #f1f1f1;
    height: 600px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h3>Run for ตุ๊ตตู่ กันเถอะ</h3>
</header>
<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
<article>
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<p>
<div class="container">
 <br>
<form id="myform1" name="form1" method="post" action="result.php" class="needs-validation" novalidate>
<div class="form-group row">
    <label for="input_name" class="col-sm-3 col-form-label text-right">ชื่อ นามสกุล</label>
    <div class="col">
      <input type="text" class="form-control" name="name" id="input_name"
      autocomplete="off" value=""  required>
      <div class="invalid-feedback">
        กรุณากรอกชื่อ นามสกุล
      </div>
    </div>
</div>
<div class="form-group row">
    <label for="input_tel" class="col-sm-3 col-form-label text-right">เบอร์มือถือ</label>
    <div class="col">
      <input type="text" class="form-control" pattern="^0([8|9|6])([0-9]{8}$)" name="input_tel" id="input_tel"
      autocomplete="off" value=""  required>
      <div class="invalid-feedback">
        กรุณากรอกเบอร์มือถือตัวเลข 10 หลัก
      </div>
    </div>
</div>
<div class="form-group row">
    <label for="input_email" class="col-sm-3 col-form-label text-right">อีเมล</label>
    <div class="col">
      <input type="text" class="form-control" name="email" id="input_email"
      pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
      autocomplete="off" value="" required>
      <div class="invalid-feedback">
        กรุณากรอกอีเมล
      </div>
    </div>
</div>
<div class="form-group row">
	<legend class="col-form-label col-sm-3 pt-0 text-right">เพศ</legend>
    <div class="col">
        <div class="form-check">
          <input class="form-check-input" type="radio"
          name="gender" id="radio_gender_1" value="male" required>
          <label class="form-check-label" for="radio_gender_1">
            ชาย
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio"
          name="gender" id="radio_gender_2" value="female" required>
          <label class="form-check-label" for="radio_gender_2">
            หญิง
          </label>
          <div class="invalid-feedback">
            กรุณาเลือกเพศ
          </div>
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="input_otp" class="col-sm-3 col-form-label text-right">อายุ</label>
    <div class="col">
      <input type="number" class="form-control" name="age" id="input_otp"
      maxlength="5"
      min="1" max="99" oninput="this.value.length<this.maxLength?this.min=Math.pow(10, this.value.length):this.min=0"
      onkeypress="return (this.value.length>=this.maxLength)?false:true"
      autocomplete="off" value="" required>
      <div class="invalid-feedback">
        กรุณากรอกอายุ
      </div>
    </div>
</div>
 <div class="form-group row">
    <label for="textarea_address" class="col-sm-3 col-form-label text-right">ที่อยู่</label>
    <div class="col">
    	<textarea class="form-control" name="address" id="textarea_address" rows="3" required></textarea>
       <div class="invalid-feedback">
        กรุณากรอกที่อยู่
      </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-3 offset-sm-3 text-right pt-3">
		 <button type="submit" name="btn_submit" id="btn_submit" value="1" class="btn btn-primary btn-block">ส่งข้อมูล</button>
	</div>
</div>
</form>

 </div>
 <footer>footer</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
     $("#myform1").on("submit",function(){
		 var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
	 });
});
</script>
</body>
</html>
