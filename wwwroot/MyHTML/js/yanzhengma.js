// 获取容器元素
var captchaContainer = document.getElementById('captchaContainer');

// 定义验证码字符集
var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

// 刷新验证码
function refreshCaptcha() {
    // 清空容器内容
    captchaContainer.innerHTML = '';

    // 创建验证码字符串
    var code = generateCaptchaCode();
    captchaContainer.innerText = code;

    // 添加点击事件
    captchaContainer.addEventListener('click', refreshCaptcha);
}

// 生成随机的验证码字符
function generateCaptchaCode() {
    var code = '';
    for (var i = 0; i < 6; i++) {
        var index = Math.floor(Math.random() * characters.length);
        code += characters[index];
    }
    return code;
}

// 初始化时刷新验证码
refreshCaptcha();
