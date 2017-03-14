<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ลงทะเบียนร่วมงาน TEDxKMITL</title>
    <meta name="theme-color" content="#e62b1a">
    <meta property="og:image" content="{{secure_asset('img/ogimage.png')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TEDxKMITL">
    <meta name="twitter:description" content="TEDxKMITL is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often.">
    <meta name="twitter:image" content="{{secure_asset('img/ogimage.png')}}">
    <link rel="icon" href="{{secure_asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{secure_asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{secure_asset('css/production.min.css')}}">
</head>
<body class="regis-page">
<div class="row">
    <div class="small-12 columns">
        <picture>
            <source type="image/svg+xml" srcset="{{secure_asset('img/nav-on-w.svg')}}">
            <source srcset="{{secure_asset('img/nav-on-w.png')}} 1x, {{secure_asset('img/2x/nav-on-w.png')}} 2x">
            <img src="{{secure_asset('img/nav-on-w.png')}}" class="regis-logo" alt="TEDxKMITL">
        </picture>
        <h1 class="regis-header">/ลงทะเบียน</h1>
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
<form name="apply" action="/apply" method="post" onsubmit="submission_control()" data-abide>
    {{ csrf_field() }}
    <div class="row">
        <div class="small-12 columns">
            <p><strong>กรุณากรอกข้อมูลอย่างถูกต้องให้ครบถ้วน</strong></p>
        </div>
        <div class="small-12 medium-6 columns">
            <label for="th_firstname">ชื่อจริง
                <input type="text" name="th_firstname" required>
            </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label for="th_lastname">นามสกุล
                <input type="text" name="th_lastname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="firstname">ชื่อจริง (ภาษาอังกฤษ)
                <input type="text" name="firstname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="lastname">นามสกุล (ภาษาอังกฤษ)
                <input type="text" name="lastname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="nickname">ชื่อเล่น (ภาษาอังกฤษ)
                <input type="text" name="nickname" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="email">อีเมล
                <input type="email" name="email" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="mobile">โทรศัพท์มือถือ
                <input type="text" name="mobile" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="age">อายุ
                <input type="text" name="age" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="gender">เพศ
                <select name="gender" required>
                    <option value="" disabled>เพศ</option>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="unisex">เพศทางเลือก</option>
                </select>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="occupation">อาชีพ
                <input type="text" name="occupation" required>
            </label>
        </div>
        <div class="small-12 medium-4 columns">
            <label for="ticket_type">ประเภทของบัตร
                <select name="ticket_type" required>
                    <option value="" disabled>เลือกประเภทบัตร</option>
                    <option value="student">นักเรียน/นักศึกษา</option>
                    <option value="general">บุคคลทั่วไป</option>
                    <option value="angel">Angel</option>
                </select>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="small-12 large-6 columns">
            <label>ความฝันตอนนี้ของคุณคืออะไร อธิบายให้เราฟังหน่อย
                <textarea name="question[1]" rows="4" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>นิยามของ Living Out Loud ของคุณคืออะไร
                <textarea name="question[2]" rows="4" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>บอกเล่าความเป็นเด็กในตัวของคุณให้เราฟังหน่อย
                <textarea name="question[3]" rows="4" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>คุณคิดว่าคุณจะได้รับอะไรจากการมาฟัง TEDxKMITL 2017 ในครั้งนี้
                <textarea name="question[4]" rows="4" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>สามสิ่งหรือสามหัวข้อที่คุณสนใจอยากจะแชร์ให้กับบุคคลอื่นๆ
                <textarea name="question[5]" rows="4" required></textarea>
            </label>
        </div>
        <div class="small-12 large-6 columns">
            <label>มีอะไรอยากบอกเราเพิ่มเติมไหมที่เราไม่ได้ถาม เราอยากรู้จักคุณเพิ่มเติม
                <textarea name="question[6]" rows="4" required></textarea>
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
            <button name="submit" class="button ghost primary" type="submit">ส่งข้อมูล</button>
        </div>
    </div>
</form>
<script src="{{secure_asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/what-input.min.js')}}"></script>
<script src="{{secure_asset('js/vendor/foundation.min.js')}}"></script>
<script type="text/javascript">
    $(document).foundation();
    function submission_control() {
        $(document)
        // form validation passed, form will submit if submit event not returned false
            .on("formvalid.zf.abide", function(ev,frm) {
                $("form button").prop("disabled", true);
                $("form button").text("กำลังส่ง...");
                return true;
            });
        return false;
    }

    $('form').on("keydown", function() {
        $("form button").prop("disabled", false);
    })
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-49199645-7', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
