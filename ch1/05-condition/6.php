<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
<title>Lấy chòm sao</title>
<link type="text/css" href="style.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
  $day = '';
  $month = '';
  $image = '';
  $name = '';
  $time = '';
  $flagShow = true;
  $result = '';
  // nếu submit không là nút Xóa
  if (isset($_POST['typeSubmit']) && $_POST['typeSubmit'] != 'Xóa') {
    // nếu các ô nhập có dữ liệu
    if (isset($_POST['day']) && isset($_POST['month'])) {
      $day = $_POST['day'];
      $month = $_POST['month'];
    // hai ô ngày tháng là hai số
      if (is_numeric($day) && is_numeric($month)) {
        $flagShow = true;
        switch($month) {
          case '1':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <= 19) { $image = 'capricorn';  $name = 'Ma Kết'; $time = '23/12 - 19/01'; }
            if($day >= 20) { $image = 'aquarius'; $name = 'Bảo Bình'; $time = '20/01 - 19/02'; }
            break;
          case '2':
            if($day < 1 || $day > 29) { $flagShow = false; break;}
            if($day <= 19) { $image = 'aquarius'; $name = 'Bảo Bình'; $time = '20/01 - 19/02'; }
            if($day >= 20) { $image = 'pisces';   $name = 'Song Ngư'; $time = '20/02 - 20/03'; }
            break;
        case '3':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <= 20) { $image = 'pisces';  $name = 'Song Ngư'; $time = '20/02 - 20/03'; }
            if($day >= 21) { $image = 'aries'; $name = 'Bạch Dương'; $time = '21/03 - 19/04'; }
            break;
        case '4':
            if($day < 1 || $day > 30) { $flagShow = false; break;}
            if($day <=19) { $image = 'aries'; $name = 'Bạch Dương'; $time = '21/03 - 19/04'; }
            if($day >= 20) { $image = 'taurus';  $name = 'Kim Ngưu'; $time = '20/04 - 20/05'; }
            break;
        case '5':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <=20) { $image = 'taurus';  $name = 'Kim Ngưu'; $time = '20/04 - 20/05'; }
            if($day >=21) { $image = 'gemini'; $name = 'Song Tử'; $time = '21/05 - 21/06'; }
            break;
        case '6':
            if($day < 1 || $day > 30) { $flagShow = false; break;}
            if($day <=21) { $image = 'gemini'; $name = 'Song Tử'; $time = '21/05 - 21/06'; }
            if($day >=22) { $image = 'cancer';  $name = 'Cự Giải'; $time = '22/06 - 22/07'; }
            break;
        case '7':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <=22) { $image = 'cancer';  $name = 'Cự Giải'; $time = '22/06 - 22/07'; }
            if($day >=23) { $image = 'leo'; $name = 'Sư Tử'; $time = '23/07 - 22/08'; }
            break;
        case '8':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <=22) { $image = 'leo'; $name = 'Sư Tử'; $time = '23/07 - 22/08'; }
            if($day >=23) { $image = 'virgo';  $name = 'Xử Nữ'; $time = '23/08 - 22/09'; }
            break;
        case '9':
            if($day < 1 || $day > 30) { $flagShow = false; break;}
            if($day <=22) { $image = 'virgo';  $name = 'Xử Nữ'; $time = '23/08 - 22/09'; }
            if($day >=23) { $image = 'libra'; $name = 'Thiên Bình'; $time = '23/09 - 23/10'; }
            break;
        case '10':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <=23) { $image = 'libra'; $name = 'Thiên Bình'; $time = '23/09 - 23/10'; }
            if($day >=24) { $image = 'scorpio';  $name = 'Bọ Cạp'; $time = '24/10 - 21/11'; }
            break;
        case '11':
            if($day < 1 || $day > 30) { $flagShow = false; break;}
            if($day <=21) { $image = 'scorpio';  $name = 'Bọ Cạp'; $time = '24/10 - 21/11'; }
            if($day >=22) { $image = 'Sagittarius'; $name = 'Nhân Mã'; $time = '22/11 - 21/12'; }
            break;
        case '12':
            if($day < 1 || $day > 31) { $flagShow = false; break;}
            if($day <=21) { $image = 'Sagittarius'; $name = 'Nhân Mã'; $time = '22/11 - 21/12'; }
            if($day >=22) { $image = 'Capricorn';  $name = 'Ma Kết'; $time = '22/12 - 19/01'; }
            break;
        // viết tiếp cho các trường hợp còn lại
          default:
            $flagShow = false;
            break;
        }
      } else {
        $flagShow = false;
      }
    }
    if($flagShow) {
        $result = '<div class="result">
              <div class="image">
                <img src="images/' . $image . '.jpg" alt="' . $image . '">
              </div>
              <div class="text">
                <span>' . $name . ' (' . ucfirst($image) . ' : ' . $time . ')</span>
              </div>
            </div>';
      }else { $result = '<div class="text">Dữ liệu không hợp lệ </div>'; }
  }
?>
  <div class="content">
    <h1>Lấy chòm sao</h1>
    <form action="#" method="post">
      <label>Ngày sinh</label>
      <input type="text" name="day" value="<?php echo $day; ?>"><br>
      <label>Tháng sinh</label>
      <input type="text" name="month" value="<?php echo $month; ?>"><br>
      <label></label>
      <input type="submit" name="typeSubmit" value="Lấy chòm sao">
      <input type="submit" name="typeSubmit" value="Xóa">
    </form>
    <?php echo $result; ?>
  </div>
</body>
</html>