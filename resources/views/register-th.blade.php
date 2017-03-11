<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register for TEDxKMITL</title>
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/production.min.css')}}">
</head>
<body>
<div class="row">
    <div class="small-12 columns">
        <h1 class="regis-header">TEDxKMITL Registration</h1>
    </div>
</div>
<form action="">
    <div class="row">
        <div class="small-12 medium-6 columns">
            <label for="th_firstname">ชื่อจริง
                <input type="text" name="th_firstname">
            </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label for="th_lastname">นามสกุล
                <input type="text" name="th_lastname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">ชื่อจริง (ภาษาอังกฤษ)
                <input type="text" name="firstname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="lastname">นามสกุล (ภาษาอังกฤษ)
                <input type="text" name="lastname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="nickname">ชื่อเล่น (ภาษาอังกฤษ)
                <input type="text" name="nickname">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="email">อีเมล
                <input type="text" name="email">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="mobile">โทรศัพท์มือถือ
                <input type="text" name="mobile">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="age">อายุ
                <input type="text" name="age">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <legend>เพศ</legend>
            <input type="radio" name="gender" value="male" id="genderMale" required><label for="genderMale">ชาย</label>
            <input type="radio" name="gender" value="female" id="genderFemale"><label for="genderFemale">หญิง</label>
            <input type="radio" name="gender" value="unisex" id="genderUnisex"><label for="genderUnisex">เพศทางเลือก</label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="occupation">อาชีพ
                <input type="text" name="occupation">
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label>ประเภทของบัตร
                <select name="ticket_type">
                    <option value="student">นักเรียน/นักศึกษา</option>
                    <option value="student">บุคคลทั่วไป</option>
                    <option value="student">Angel</option>
                </select>
            </label>
        </div>
    </div>
</form>
</body>
</html>