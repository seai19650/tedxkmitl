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
<body class="regis-page">
<div class="row">
    <div class="small-12 columns">
        <picture>
            <source type="image/svg+xml" srcset="{{asset('img/nav-on-w.svg')}}">
            <source srcset="{{asset('img/nav-on-w.png')}} 1x, {{asset('img/2x/nav-on-w.png')}} 2x">
            <img src="{{asset('img/nav-on-w.png')}}" class="regis-logo" alt="TEDxKMITL">
        </picture>
        <h1 class="regis-header">/Register</h1>
    </div>
</div>
<div class="row">
    <div class="small-12 columns">
        <div class="card">
            <div class="card-section">
                <p><strong>วันที่:</strong> 22 เมษายน 2560</p>
                <p><strong>สถานที่</strong></p>
                <p>หอประชุมใหญ่คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</p>
                <p><strong>ราคาบัตร</strong></p>
                <ul>
                    <li>นักเรียน นักศึกษา (ไม่เกินระดับปริญญาตรี) 250 บาท</li>
                    <li>บุคคลทั่วไป 500 บาท</li>
                    <li>Angel 1000 บาท</li>
                </ul>
                <p>(บัตรชนิด Angel เป็นบัตรสำหรับการแบ่งปัน
                    นั่นหมายถึงเมื่อคุณซื้อบัตรชนิดนี้คุณได้มอบโอกาสให้กับผู้คนที่มีบทบาทในการพัฒนาและกระตุ้นให้สังคมมีการเปลี่ยนแปลงไปในทิศทางที่ดีขึ้น
                    บุคคลเหล่านั้น จะถูกคัดเลือกจากผลจากการพัฒนาสังคมที่มีประสิทธิภาพ และการจัดการที่มีผลชัดเจน เช่น
                    คุณครูในพื้นที่ห่างไกล บุคคลที่ทำค่ายอาสา หรือ บุคคลจากมูลนิธิต่างๆ)</p>
                <p>จำกัดผู้เข้าร่วมเพียง 100 ท่าน ระยะเวลาการสมัครถึงวันที่ 20 มีนาคม 2560 เวลา 23.59 น.</p>
                <p>*ผู้ที่ผ่านการคัดเลือกจะได้รับอีเมล์ยืนยันจาก tedxkmitl@gmail.com พร้อมรายละเอียดการชำระเงิน
                    โดยจะต้องโอนเงินภายใน 3 วันนับจากได้รับอีเมล ไม่เช่นนั้นจะถือว่าสละสิทธิ์</p>
                <p>ติดต่อสอบถาม tedxkmitl@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<form name="apply" action="/apply" method="post">
    {{ csrf_field() }}
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
            <label>เพศ
                <select name="gender">
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="unisex">เพศทางเลือก</option>
                </select>
            </label>
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
    <div class="row">
        <div class="small-12 large-6 columns">
            <label>ความฝันตอนนี้ของคุณคืออะไร อธิบายให้เราฟังหน่อย
                <textarea name="q1" rows="4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>นิยามของ Living Out Loud ของคุณคืออะไร
                <textarea name="q2" rows="4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>บอกเล่าความเป็นเด็กในตัวของคุณให้เราฟังหน่อย
                <textarea name="q3" rows="4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>คุณคิดว่าคุณจะได้รับอะไรจากการมาฟัง TEDxKMITL 2017 ในครั้งนี้
                <textarea name="q4" rows="4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>สามสิ่งหรือสามหัวข้อที่คุณสนใจอยากจะแชร์ให้กับบุคคลอื่นๆ
                <textarea name="q5" rows="4"></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>มีอะไรอยากบอกเราเพิ่มเติมไหมที่เราไม่ได้ถาม เราอยากรู้จักคุณเพิ่มเติม
                <textarea name="q6" rows="4"></textarea>
            </label>
        </div>
        <div class="small-12 columns">
            <div class="card">
                <div class="card-section">
                    <p>เมื่อคุณกดปุ่มส่งข้อมูล หมายความว่าคุณยอมรับเงื่อนไขดังนี้</p>
                    <ul>
                        <li>ฉันสามารถเข้าร่วมงานTEDxKMITLในวันที่ 22 เมษายน 2560</li>
                        <li>ฉันเต็มใจที่จะจ่ายค่าบัตรสำหรับเข้าร่วมงานTEDxKMITL ตามราคาบัตรที่ระบุไว้</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="small-12 columns">
            <button class="button ghost primary" type="submit">ส่งข้อมูล</>
        </div>
    </div>
</form>
</body>
</html>