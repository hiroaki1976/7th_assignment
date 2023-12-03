//
// パスワード一致チェック
//
$('#submit').on('click', function(e){
    let input1 = $('#password1')[0].value;
    let input2 = $('#password2')[0].value;
    if (input1 != input2){
        alert('パスワードの入力値が一致しません');
        e.preventDefault();
    }
});

//
// パスワード強度チェック
//
$('#password1').on('keyup', function() {
    // 入力値取得
    const value = $(this).val();
    // 入力値をもとに強度を確認
    const result = checkStrength(value);
    // 結果を出力
    $('#result').text(result);
  });
  
  const checkStrength = (password) => {
  
    let strength = 0 //強さ
  
    if (password.length < 6) {
      return '短すぎる！！'
    }
  
    // 文字数が7より大きいければ+1
    if (password.length > 7) strength += 1
    // 英字の大文字と小文字を含んでいれば+1
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
    // 英字と数字を含んでいれば+1
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
   // 記号を含んでいれば+1
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
    // 記号を2つ含んでいれば+1
    if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
  
    // 点数を元に強さを計測
    if (strength < 2) {
      return '弱いです〜'
    } else if (strength == 2) {
      return '良い感じ！！'
    } else {
      return '強いです！!'
    }
  }