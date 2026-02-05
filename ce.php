<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>站点分类与内容</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        h1.main-title { text-align: right; font-size: 28px; font-weight: bold; margin-bottom: 40px; }
        h2 { font-size: 22px; font-weight: bold; margin-top: 30px; margin-bottom: 15px; }
        .section a { display: block; color: #007bff; text-decoration: none; margin-bottom: 15px; font-size: 16px; }
        .section a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <h1 class="main-title">站点分类与内容</h1>

    <h2>分类页</h2>
    <div class="section">
        <a href="#">okdoc-t1</a>
        <a href="#">okdoc-t2</a>
        <a href="#">okdoc-t3</a>
        <a href="#">okdoc-t4</a>
    </div>

    <h2>样本内容页</h2>
    <div class="section">
        <?php
        $baseUrl = "https://www.syxuanan.cn/yeslookx/";
        for ($i = 0; $i < 3; $i++) {
            $randomId = rand(10000, 99999);
            $fullUrl = $baseUrl . $randomId . ".html";
            echo '<a href="' . $fullUrl . '" target="_blank">' . $fullUrl . '</a>';
        }
        ?>
    </div>

    <h2>Sitemap</h2>
    <div class="section">
        <a href="/sitemap.xml">查看 Sitemap</a>
    </div>

</body>
</html>
