const form = document.querySelector("form")
const tk = document.getElementById('taikhoan');
const pass = document.getElementById('pass');
const cpass = document.getElementById('confirmpassword');
const ho = document.getElementById('ho');
const ten = document.getElementById('ten');
const email = document.getElementById('email');
const sdt = document.getElementById('sdt');


function validate() {
  if (checkNull(tk.value) || checkNull(pass.value) || checkNull(cpass.value) || checkNull(ho.value) || checkNull(ten.value) || checkNull(email.value) || checkNull(sdt.value)) {
    alert("Vui lòng điền đầy đủ thông tin!");
  } else {
    if (checkTk(tk.value)) {
      alert("Tên đăng nhập không hợp lệ.Tên đăng nhập phải không có khoảng trống và bắt đầu là 1 ký tự.");
      document.getElementById('taikhoan').focus();
    }
    else {
      if (checkMk(pass.value, tk.value)) {
        alert("Mật khẩu phải có ít nhất 8 ký tự và nhiều nhất là 16 ký tự.Mật khẩu phải chứa ký tự, ký số, ký tự đặc biệt, có chữ hoa, chữ thường và không chứa tên người dùng.");
        document.getElementById('pass1').focus();
      }
      else {
        if (!checkConfirmPassword(pass.value, cpass.value)) {
          alert("Hai trường mật khẩu không giống nhau.");
          document.getElementById('pass').focus();
        } else {
          if (checkEmail(email.value)) {
            alert("Email không hợp lệ.");
            document.getElementById('email').focus();
          }
          else {
            if (checkSdt(sdt.value)) {
              alert("Số điện thoại không hợp lệ.");
              document.getElementById('sdt').focus();
            }
            else{
              alert("Đăng ký thành công!");
              form.submit();
            }
          }
        }
      }
    }
  }
}

function checkTk(val) {
  return (/\s/.test(val) || !/^[A-Za-z]/.test(val));
}

function checkMk(val, ten) {
  var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;
  return (!pattern.test(val) || /ten/.test(val));
}

function checkConfirmPassword(val1, val2) {
  return (val1 === val2);
}

function checkEmail(val) {
  var pat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return !pat.test(val);
}

function checkSdt(val) {
  var p = /^[0-9]{12}/;
  return !p.test(val);
}

function checkNull(val) {
  return !val;
}